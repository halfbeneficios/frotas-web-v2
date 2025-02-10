<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VehicleTrip extends Model
{

    use HasFactory;

    protected $casts = [
        'attachment_files' => 'array',
    ];

    protected $fillable = [
        'registration',
        'title',
        'description',
        'itinerary',
        'passengers',
        'start_at',
        'end_at',
        'initial_city',
        'final_city',
        'initial_km',
        'final_km',
        'observation',
        'attachment_files',
        'vehicle_id',
        'driver_id',
        'subsidiary_id',
        'active',
    ];

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }

    public function subsidiary(): BelongsTo
    {
        return $this->belongsTo(Subsidiary::class);
    }

}
