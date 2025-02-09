<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CostCenter extends Model
{

    use HasFactory;

    protected $fillable = [
        'code',
        'cnpj',
        'name',
        'description',
        'company_id',
        'address_id',
        'active'
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }

    public function manager_profiles(): HasMany
    {
        return $this->hasMany(ManagerProfile::class);
    }

    public function drivers(): HasMany
    {
        return $this->hasMany(Driver::class);
    }

    public function vehicles(): HasMany
    {
        return $this->hasMany(Vehicle::class);
    }

    public function vehicle_infractions(): HasMany
    {
        return $this->hasMany(VehicleInfraction::class);
    }

    public function vehicle_expenses(): HasMany
    {
        return $this->hasMany(VehicleExpense::class);
    }

}
