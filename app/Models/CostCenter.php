<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CostCenter extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'company_id',
        'active',
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

}
