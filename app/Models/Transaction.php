<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'users_id', 'transactions_types_id', 'cost_id',
        'transaction', 'amount_price'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function transactionType()
    {
        return $this->belongsTo(TransactionsType::class, 'transactions_types_id', 'id');
    }

    public function cost()
    {
        return $this->belongsTo(Cost::class, 'cost_id', 'id');
    }

}
