<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Subsidiary extends Model
{

    use HasFactory;

    protected $fillable = [
        'code',
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

    public function result_center(): HasOne
    {
        return $this->hasOne(ResultCenter::class);
    }

    public function cost_center(): HasMany
    {
        return $this->hasMany(CostCenter::class);
    }

    public function vehicles(): HasMany
    {
        return $this->hasMany(Vehicle::class);
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
