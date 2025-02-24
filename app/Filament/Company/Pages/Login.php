<?php

namespace App\Filament\Company\Pages;

use App\Models\AuthenticationLog;
use App\Models\User;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use DiogoGPinto\AuthUIEnhancer\Pages\Auth\AuthUiEnhancerLogin;
use Filament\Facades\Filament;
use Filament\Http\Responses\Auth\Contracts\LoginResponse;
use Filament\Models\Contracts\FilamentUser;


class Login extends AuthUiEnhancerLogin
{

    public function authenticate(): ?LoginResponse
    {

        try {
            $this->rateLimit(5);
        } catch (TooManyRequestsException $exception) {
            $this->getRateLimitedNotification($exception)?->send();

            return null;
        }

        $data = $this->form->getState();

        if (! Filament::auth()->attempt($this->getCredentialsFromFormData($data), $data['remember'] ?? false)) {
            $this->throwFailureValidationException();
        }

        $user = Filament::auth()->user();

        if (
            ($user instanceof FilamentUser) &&
            (! $user->canAccessPanel(Filament::getCurrentPanel()))
        ) {
            Filament::auth()->logout();

            $this->throwFailureValidationException();
        }

        $user = User::find($user->id);

        $user->update([
            'logged_at' => now(),
        ]);

        $request = request();

        $log = AuthenticationLog::create([
            'user_id' => $user->id,
            'logged_at' => now(),
            'ip' => $request->ip(),
            'headers' => json_encode($request->headers->all()),
            'server' => json_encode($request->server->all()),
        ]);

        session()->regenerate();

        return app(LoginResponse::class);

    }

}
