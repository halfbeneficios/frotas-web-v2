<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EmployeeProfile extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'active'
    ];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }

}
