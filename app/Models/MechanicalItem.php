<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MechanicalItem extends Model
{

    use HasFactory;

    protected $fillable = [
        'code',
        'original_code',
        'name',
        'observation',
        'base_value',
        'measurement_unity',
        'description_type',
        'description_group',
        'mechanical_item_group',
        'mechanical_item_type',
        'active',
    ];

}
