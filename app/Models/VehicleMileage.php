<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VehicleMileage extends Model
{

    use HasFactory;

    protected $casts = [
        'attachment_files' => 'array',
    ];

    protected $fillable = [
        'current_km',
        'new_km',
        'reason',
        'attachment_files',
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
