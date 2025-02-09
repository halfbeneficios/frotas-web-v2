<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{

    use HasFactory;

    protected $fillable = [
        'type_company',
        'inscription',
        'cnpj',
        'business_name',
        'fantasy_name',
        'city_register',
        'state_register',
        'phone',
        'phone_fix',
        'contact_name',
        'email',
        'logo_path',
        'observation',
        'address_id',
        'user_id',
        'active'
    ];

    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function company_contracts(): HasMany
    {
        return $this->hasMany(CompanyContract::class);
    }

    public function company_documents(): HasMany
    {
        return $this->hasMany(CompanyDocument::class);
    }

    public function accredited_companies(): HasMany
    {
        return $this->hasMany(AccreditedCompany::class);
    }

    public function cost_centers(): HasMany
    {
        return $this->hasMany(CostCenter::class);
    }

    public function fleet_types(): HasMany
    {
        return $this->hasMany(FleetType::class);
    }

    public function departments(): HasMany
    {
        return $this->hasMany(Department::class);
    }

    public function subsidiaries(): HasMany
    {
        return $this->hasMany(Subsidiary::class);
    }

    public function result_centers(): HasMany
    {
        return $this->hasMany(ResultCenter::class);
    }

    public function accredited_groups(): HasMany
    {
        return $this->hasMany(AccreditedGroup::class);
    }

    public function company_group_lists(): HasMany
    {
        return $this->hasMany(CompanyGroupList::class);
    }

    public function manager_profiles(): HasMany
    {
        return $this->hasMany(ManagerProfile::class);
    }

    public function managers(): HasMany
    {
        return $this->hasMany(Manager::class);
    }

    public function drivers(): HasMany
    {
        return $this->hasMany(Driver::class);
    }

    public function vehicles(): HasMany
    {
        return $this->hasMany(Vehicle::class);
    }

    public function infractions(): HasMany
    {
        return $this->hasMany(Infraction::class);
    }

    public function tags(): HasMany
    {
        return $this->hasMany(Tag::class);
    }

}
