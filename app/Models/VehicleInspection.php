<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VehicleInspection extends Model
{

    use HasFactory;

    protected $casts = [
        'inspection_files' => 'array',
    ];

    protected $fillable = [
        'code',
        'checklist_date',
        'km',
        'fuel_level',
        'dvd_player',
        'extinguisher',
        'steppe',
        'air_conditioning',
        'horn',
        'seat_belts',
        'car_jack',
        'scratched',
        'broken',
        'dented',
        'observation',
        'inspection_files',
        'vehicle_id',
        'user_id',
    ];

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
