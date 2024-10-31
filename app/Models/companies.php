<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class companies extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['company_name', 'company_phone'];

    public function profiles()
    {
        return $this->hasMany(company_profile::class, 'company_id', 'id');
    }

    public function branches()
    {
        return $this->hasMany(branchs::class, 'company_id', 'id');
    }
    public function financialFunds()
    {
        return $this->hasMany(BranchFinancialFund::class, 'company_id', 'id');
    }

}
