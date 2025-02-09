<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlatformAnnouncement extends Model
{

    protected $fillable = [
        'title',
        'description',
        'banner_path',
        'type_announcement',
        'appearance_interval',
        'link_redirection',
        'redirected',
        'active'
    ];

}
