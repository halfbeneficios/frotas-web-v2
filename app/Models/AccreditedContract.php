<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccreditedContract extends Model
{

    protected $fillable = [
        'contract_number',
        'description',
        'start_at',
        'end_at',
        'fee_tax',
        'payment_deadline',
        'observation',
        'contract_files',
        'accredited_id',
        'active'
    ];

    public function accredited(): BelongsTo
    {
        return $this->belongsTo(Accredited::class);
    }

}
