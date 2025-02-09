<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccreditedGroupList extends Model
{

    protected $fillable = [
        'accredited_group_id',
        'accredited_id',
    ];

    public function accredited_group(): BelongsTo
    {
        return $this->belongsTo(AccreditedGroup::class);
    }

    public function accredited(): BelongsTo
    {
        return $this->belongsTo(Accredited::class);
    }

}
