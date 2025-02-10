<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements FilamentUser
{

    use HasApiTokens;
    use HasFactory;
    use TwoFactorAuthenticatable;
    use Notifiable;

    protected $fillable = [
        'type_user_id',
        'name',
        'email',
        'password',
        'logged_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    protected $appends = [
        'profile_photo',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function type_user(): BelongsTo
    {
        return $this->belongsTo(TypeUser::class);
    }

    public function company(): HasOne
    {
        return $this->hasOne(Company::class);
    }

    public function accredited(): HasOne
    {
        return $this->hasOne(Accredited::class);
    }

    public function employee(): HasOne
    {
        return $this->hasOne(Employee::class);
    }

    public function manager(): HasOne
    {
        return $this->hasOne(Manager::class);
    }

    public function driver(): HasOne
    {
        return $this->hasOne(Driver::class);
    }

    public function recent_activities(): HasMany
    {
        return $this->hasMany(RecentActivity::class);
    }

    public function api_keys(): HasMany
    {
        return $this->hasMany(ApiKey::class);
    }

    public function company_contract_activities(): HasMany
    {
        return $this->hasMany(CompanyContractActivity::class);
    }

    public function company_documents(): HasMany
    {
        return $this->hasMany(CompanyDocument::class);
    }

    public function accredited_documents(): HasMany
    {
        return $this->hasMany(AccreditedDocument::class);
    }

    public function manager_documents(): HasMany
    {
        return $this->hasMany(ManagerDocument::class);
    }

    public function vehicle_infractions(): HasMany
    {
        return $this->hasMany(VehicleInfraction::class);
    }

    public function vehicle_accidents(): HasMany
    {
        return $this->hasMany(VehicleAccident::class);
    }

    public function vehicle_expenses(): HasMany
    {
        return $this->hasMany(VehicleExpense::class);
    }

    public function vehicle_mileages(): HasMany
    {
        return $this->hasMany(VehicleMileage::class);
    }

    public function vehicle_inspections(): HasMany
    {
        return $this->hasMany(VehicleInspection::class);
    }

    public function system_alerts(): HasMany
    {
        return $this->hasMany(SystemAlert::class);
    }

    public function system_alert_activities(): HasMany
    {
        return $this->hasMany(SystemAlertActivity::class);
    }

    public function canAccessPanel(Panel $panel): bool
    {

        if ($panel->getId() === 'admin') {

            return $this->type_user_id === 1 || $this->type_user_id === 2;

        }

        if ($panel->getId() === 'company') {

            return $this->type_user_id === 3 || $this->type_user_id === 4;

        }

        if ($panel->getId() === 'accredited') {

            return $this->type_user_id === 5;

        }

        return false;

    }

}
