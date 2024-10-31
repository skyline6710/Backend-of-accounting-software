<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class branchs extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['company_id', 'is_main_branch', 'branch_location', 'branch_number', 'number_of_employees'];

    public function company()
    {
        return $this->belongsTo(companies::class, 'company_id', 'id');
    }

    public function employees()
    {
        return $this->hasMany(Employee::class, 'branch_id', 'id');
    }
    public function currencies()
    {
        return $this->hasMany(BranchCurrencies::class, 'branch_id', 'id');
    }

    public function warehouses()
    {
        return $this->hasMany(Warehouse::class, 'branch_id', 'id');
    }

}
