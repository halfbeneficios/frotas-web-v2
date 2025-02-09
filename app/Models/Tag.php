<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tag extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'icon',
        'company_id',
        'active',
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

}
