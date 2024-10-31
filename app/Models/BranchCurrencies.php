<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BranchCurrencies extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['branch_id', 'currency', 'xchange_rate', 'corresponding_currency'];

    public function branch()
    {
        return $this->belongsTo(branchs::class, 'branch_id', 'id');
    }
}
