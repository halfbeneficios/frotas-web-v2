<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VehicleReservation extends Model
{

    use HasFactory;

    protected $fillable = [
        'code',
        'title',
        'description',
        'itinerary',
        'passengers',
        'start_at',
        'end_at',
        'observation',
        'attachment_files',
        'reservation_status',
        'vehicle_id',
        'driver_id',
        'subsidiary_id',
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
