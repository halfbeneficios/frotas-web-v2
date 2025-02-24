<?php

namespace App\Console\Commands;

use App\Models\Manager;
use App\Models\User;
use App\Notifications\General\InactiveTimeUser;
use Illuminate\Console\Command;

class InactiveTimeUsers extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'inactive:time-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Inativar usuários que não acessam o sistema a mais de 60 dias.';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $users = User::where('logged_at', '<', now()->subDays(60))->get();

        foreach ($users as $user) {

            if($user->type_user_id == 4){

                $manager = Manager::where('user_id', $user->id)->first();

                if($manager){

                    $manager->update(['active' => 0]);

                    $notification = new InactiveTimeUser($user, $user->name);

                    \Illuminate\Support\Facades\Notification::route('mail', $user->email)->notify($notification);

                }

            }

        }

        $this->info('Usuários inativados com sucesso!');

    }

}
