<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccreditedCompany extends Model
{

    protected $fillable = [
        'accredited_id',
        'company_id',
    ];

    public function accredited(): BelongsTo
    {
        return $this->belongsTo(Accredited::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

}
