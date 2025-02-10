<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vehicle extends Model
{

    use HasFactory;

    protected $casts = [
        'vehicle_files' => 'array',
    ];

    protected $fillable = [
        'registration',
        'card_number',
        'serial_number',
        'plate',
        'producer',
        'model',
        'year',
        'fuel_type',
        'chassi',
        'renavam',
        'km',
        'color',
        'motor',
        'aro',
        'tank_capacity',
        'lotation',
        'prefix',
        'fleet_size',
        'performance_type',
        'type_vehicle',
        'vehicle_situation',
        'observation',
        'vehicle_files',
        'fleet_type_id',
        'company_id',
        'driver_id',
        'subsidiary_id',
        'cost_center_id',
        'result_center_id',
        'state_id',
        'active'
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }

    public function subsidiary(): BelongsTo
    {
        return $this->belongsTo(Subsidiary::class);
    }

    public function cost_center(): BelongsTo
    {
        return $this->belongsTo(CostCenter::class);
    }

    public function result_center(): BelongsTo
    {
        return $this->belongsTo(ResultCenter::class);
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function vehicle_insurances(): HasMany
    {
        return $this->hasMany(VehicleInsurance::class);
    }

    public function vehicle_documents(): HasMany
    {
        return $this->hasMany(VehicleDocument::class);
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

    public function vehicle_reservations(): HasMany
    {
        return $this->hasMany(VehicleReservation::class);
    }

    public function vehicle_trips(): HasMany
    {
        return $this->hasMany(VehicleTrip::class);
    }

    public function vehicle_inspections(): HasMany
    {
        return $this->hasMany(VehicleInspection::class);
    }

}
