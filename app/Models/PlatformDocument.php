<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlatformDocument extends Model
{

    protected $fillable = [
        'name',
        'description',
        'document_path',
        'file_type',
        'file_extension',
        'user_id',
        'active'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
