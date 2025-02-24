<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccreditedResponsible extends Model
{

    use HasFactory;

    protected $fillable = [
        'full_name',
        'cpf',
        'rg',
        'expediter',
        'expedition_date',
        'birth',
        'phone',
        'role',
    ];

}
