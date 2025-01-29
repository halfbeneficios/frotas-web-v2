<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Accredited extends Model
{

    use HasFactory;

    protected $fillable = [
        'cnpj',
        'business_name',
        'fantasy_name',
        'inscription',
        'phone',
        'phone_fix',
        'email',
        'address_id',
        'user_id',
        'active',
    ];

    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
