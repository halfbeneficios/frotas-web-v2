<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccreditedGroup extends Model
{

    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'description',
        'company_id',
        'active'
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function accredited_group_lists(): HasMany
    {
        return $this->hasMany(AccreditedGroupList::class);
    }

}
