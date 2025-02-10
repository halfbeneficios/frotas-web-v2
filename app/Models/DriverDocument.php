<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DriverDocument extends Model
{

    protected $casts = [
        'document_files' => 'array',
    ];

    protected $fillable = [
        'name',
        'document_number',
        'expire_at',
        'observation',
        'document_files',
        'driver_id',
        'state_id',
        'active'
    ];

    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

}
