<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BranchFinancialFund extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'UUID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['company_UUID', 'total_amount', 'last_edit_date'];

    public function company()
    {
        return $this->belongsTo(companies::class, 'company_UUID', 'UUID');
    }
}
