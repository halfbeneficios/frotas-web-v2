<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Accredited extends Model
{

    use HasFactory;

    protected $fillable = [
        'registration',
        'cnpj',
        'business_name',
        'fantasy_name',
        'city_register',
        'state_register',
        'phone',
        'phone_fix',
        'contact_name',
        'email',
        'logo_path',
        'address_id',
        'user_id',
        'active'
    ];

    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function accredited_location(): HasOne
    {
        return $this->hasOne(AccreditedLocation::class);
    }

    public function accredited_responsibles(): HasMany
    {
        return $this->hasMany(AccreditedResponsible::class);
    }

    public function accredited_contracts(): HasMany
    {
        return $this->hasMany(AccreditedContract::class);
    }

    public function accredited_documents(): HasMany
    {
        return $this->hasMany(AccreditedDocument::class);
    }

    public function accredited_companies(): HasMany
    {
        return $this->hasMany(AccreditedCompany::class);
    }

    public function accredited_group_lists(): HasMany
    {
        return $this->hasMany(AccreditedGroupList::class);
    }

}
