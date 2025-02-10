<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccreditedLocation extends Model
{

    protected $casts = [
        'accredited_photos' => 'array',
    ];

    protected $fillable = [
        'accredited_id',
        'description',
        'lat',
        'lng',
        'open_time',
        'close_time',
        'working_days',
        'accredited_photos',
        'full_time'
    ];

    public function accredited(): BelongsTo
    {
        return $this->belongsTo(Accredited::class);
    }

}
