<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CompanyGroup extends Model
{

    protected $fillable = [
        'code',
        'name',
        'description',
        'active'
    ];

    public function company_group_list(): HasMany
    {
        return $this->hasMany(CompanyGroupList::class);
    }

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }

}
