<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyContractLimit extends Model
{

    protected $fillable = [
        'period_start',
        'period_finish',
        'period_limit',
        'remaining_limit',
        'spent_limit',
        'company_contract_id'
    ];

    public function company_contract(): BelongsTo
    {
        return $this->belongsTo(CompanyContract::class);
    }

}
