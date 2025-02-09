<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyContractActivity extends Model
{

    protected $fillable = [
        'message',
        'attachment_files',
        'company_contract_id',
        'user_id'
    ];

    public function company_contract(): BelongsTo
    {
        return $this->belongsTo(CompanyContract::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
