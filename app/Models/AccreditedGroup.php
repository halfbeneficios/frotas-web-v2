<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccreditedGroup extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'description',
        'accrediteds',
        'company_id',
        'active',
    ];

    protected $casts = [
        'accrediteds' => 'array',
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

}
