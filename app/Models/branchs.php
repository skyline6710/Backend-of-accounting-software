<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class branchs extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'UUID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['company_UUID', 'is_main_branch', 'branch_location', 'branch_number', 'number_of_employees'];

    public function company()
    {
        return $this->belongsTo(companies::class, 'company_UUID', 'UUID');
    }

    public function employees()
    {
        return $this->hasMany(Employee::class, 'branch_UUID', 'UUID');
    }
    public function currencies()
    {
        return $this->hasMany(BranchCurrencies::class, 'branch_UUID', 'UUID');
    }

    public function warehouses()
    {
        return $this->hasMany(Warehouse::class, 'branch_UUID', 'UUID');
    }

}
