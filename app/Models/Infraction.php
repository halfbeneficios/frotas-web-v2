<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Infraction extends Model
{

    use HasFactory;

    protected $fillable = [
        'ctb_article',
        'name',
        'description',
        'value',
        'point_reduction',
        'infraction_gravity',
        'company_id',
        'cnh_suspension',
        'active',
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

}
