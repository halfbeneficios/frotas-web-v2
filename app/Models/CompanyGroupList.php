<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyGroupList extends Model
{

    protected $fillable = [
        'company_group_id',
        'company_id'
    ];

    public function company_group(): BelongsTo
    {
        return $this->belongsTo(CompanyGroup::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

}
