<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['branch_id', 'user_id', 'full_name', 'avatar', 'email', 'phone_number', 'gender', 'address', 'base_salary'];

    public function branch()
    {
        return $this->belongsTo(branchs::class, 'branch_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function salaries()
    {
        return $this->hasMany(Salary::class, 'employees_id', 'id');
    }

}
