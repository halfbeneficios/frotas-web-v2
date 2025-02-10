<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{

    use HasFactory;

    protected $casts = [
        'employee_files' => 'array',
    ];

    protected $fillable = [
        'registration',
        'full_name',
        'email',
        'phone',
        'contact_name',
        'cpf',
        'rg',
        'profile_photo',
        'employee_files',
        'employee_profile_id',
        'company_group_id',
        'user_id',
        'active'
    ];

    public function employee_profile(): BelongsTo
    {
        return $this->belongsTo(EmployeeProfile::class);
    }

    public function company_group(): BelongsTo
    {
        return $this->belongsTo(CompanyGroup::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
