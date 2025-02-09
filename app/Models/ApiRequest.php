<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiRequest extends Model
{

    use HasFactory;

    protected $fillable = [
        'route_name',
        'route_endpoint',
        'ip',
        'method',
        'url',
        'payload',
        'api_key'
    ];

}
