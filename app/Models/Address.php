<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Address extends Model
{

    use HasFactory;

    protected $fillable = [
        'street',
        'number',
        'district',
        'postal_code',
        'complement',
        'city_id',
        'state_id',
    ];

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function platform_information(): HasOne
    {
        return $this->hasOne(PlatformInformation::class);
    }

    public function company(): HasMany
    {
        return $this->hasMany(Company::class);
    }

    public function accredited(): HasMany
    {
        return $this->hasMany(Accredited::class);
    }

    public function cost_center(): HasMany
    {
        return $this->hasMany(CostCenter::class);
    }

    public function subsidiary(): HasMany
    {
        return $this->hasMany(Subsidiary::class);
    }

    public function result_center(): HasMany
    {
        return $this->hasMany(ResultCenter::class);
    }

    public function driver(): HasMany
    {
        return $this->hasMany(Driver::class);
    }

    public function vehicle_infractions(): HasMany
    {
        return $this->hasMany(VehicleInfraction::class);
    }

}
