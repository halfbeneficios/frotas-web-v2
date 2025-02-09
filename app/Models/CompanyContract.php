<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CompanyContract extends Model
{

    protected $fillable = [
        'contract_number',
        'description',
        'start_at',
        'end_at',
        'contractual_limit',
        'contractual_discount',
        'receipt_deadline',
        'observation',
        'contract_files',
        'company_id',
        'active'
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function company_contract_limits(): HasMany
    {
        return $this->hasMany(CompanyContractLimit::class);
    }

    public function company_contract_activities(): HasMany
    {
        return $this->hasMany(CompanyContractActivity::class);
    }

}
