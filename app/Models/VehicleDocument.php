<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VehicleDocument extends Model
{

    use HasFactory;

    protected $casts = [
        'document_files' => 'array',
    ];

    protected $fillable = [
        'name',
        'document_number',
        'expire_at',
        'observation',
        'document_files',
        'vehicle_id',
        'state_id',
        'active',
    ];

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

}
