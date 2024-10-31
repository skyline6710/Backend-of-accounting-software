<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $primaryKey = 'UUID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['branch_UUID', 'user_UUID', 'full_name', 'avatar', 'email', 'phone_number', 'gender', 'address', 'base_salary'];

    public function branch()
    {
        return $this->belongsTo(branchs::class, 'branch_UUID', 'UUID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_UUID', 'UUID');
    }
    public function salaries()
    {
        return $this->hasMany(Salary::class, 'employees_UUID', 'UUID');
    }

}
