<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VehicleAccident extends Model
{

    use HasFactory;

    protected $casts = [
        'attachment_files' => 'array',
    ];

    protected $fillable = [
        'code',
        'occurrence_number',
        'description',
        'report_date',
        'attachment_files',
        'vehicle_id',
        'driver_id',
        'city_id',
        'state_id',
        'user_id',
    ];

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
