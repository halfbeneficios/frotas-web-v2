<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Manager extends Model
{

    use HasFactory;

    protected $fillable = [
        'registration',
        'name',
        'email',
        'phone',
        'contact_name',
        'cpf',
        'rg',
        'expediter',
        'birth',
        'min_approval',
        'max_approval',
        'profile_photo',
        'observation',
        'company_id',
        'manager_profile_id',
        'department_id',
        'user_id',
        'active'
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function manager_profile(): BelongsTo
    {
        return $this->belongsTo(ManagerProfile::class);
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function manager_documents(): HasMany
    {
        return $this->hasMany(ManagerDocument::class);
    }

}
