<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccreditedDocument extends Model
{

    protected $fillable = [
        'name',
        'description',
        'document_path',
        'file_type',
        'file_extension',
        'accredited_id',
        'user_id',
        'active'
    ];

    public function accredited(): BelongsTo
    {
        return $this->belongsTo(Accredited::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
