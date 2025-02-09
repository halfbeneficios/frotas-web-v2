<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Driver extends Model
{

    use HasFactory;

    protected $fillable = [
        'registration',
        'name',
        'email',
        'phone',
        'contact_name',
        'cpf',
        'rg',
        'expediter',
        'birth',
        'cnh',
        'cnh_category',
        'cnh_emission',
        'cnh_expire',
        'observation',
        'company_id',
        'subsidiary_id',
        'cost_center_id',
        'address_id',
        'user_id',
        'active'
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function subsidiary(): BelongsTo
    {
        return $this->belongsTo(Subsidiary::class);
    }

    public function cost_center(): BelongsTo
    {
        return $this->belongsTo(CostCenter::class);
    }

    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function driver_documents(): HasMany
    {
        return $this->hasMany(DriverDocument::class);
    }

    public function vehicles(): HasMany
    {
        return $this->hasMany(Vehicle::class);
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

    public function vehicle_reservations(): HasMany
    {
        return $this->hasMany(VehicleReservation::class);
    }

    public function vehicle_trips(): HasMany
    {
        return $this->hasMany(VehicleTrip::class);
    }

}
