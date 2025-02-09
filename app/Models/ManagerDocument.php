<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ManagerDocument extends Model
{

    protected $fillable = [
        'name',
        'description',
        'document_path',
        'file_type',
        'file_extension',
        'manager_id',
        'user_id',
        'active'
    ];

    public function manager(): BelongsTo
    {
        return $this->belongsTo(Manager::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
