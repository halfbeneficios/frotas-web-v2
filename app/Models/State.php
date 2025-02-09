<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class State extends Model
{

    protected $fillable = [
        'name',
        'initials',
        'region_id',
    ];

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }

    public function driver_documents(): HasMany
    {
        return $this->hasMany(DriverDocument::class);
    }

    public function vehicles(): HasMany
    {
        return $this->hasMany(Vehicle::class);
    }

    public function vehicle_insurances(): HasMany
    {
        return $this->hasMany(VehicleInsurance::class);
    }

    public function vehicle_documents(): HasMany
    {
        return $this->hasMany(VehicleDocument::class);
    }

    public function vehicle_accidents(): HasMany
    {
        return $this->hasMany(VehicleAccident::class);
    }

}
