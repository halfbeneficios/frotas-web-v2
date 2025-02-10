<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlatformInformation extends Model
{

    protected $casts = [
        'attachment_files' => 'array',
    ];

    protected $fillable = [
        'cnpj',
        'business_name',
        'fantasy_name',
        'city_register',
        'state_register',
        'email',
        'phone',
        'phone_fix',
        'cnae',
        'tax_regime',
        'logo_path',
        'responsible_name',
        'responsible_cpf',
        'responsible_birth',
        'responsible_email',
        'responsible_phone',
        'address_id',
        'attachment_files',
        'observation'
    ];

    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }

}
