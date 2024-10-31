<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'UUID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'users_UUID', 'transactions_types_UUID', 'cost_UUID',
        'transaction', 'amount_price'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_UUID', 'UUID');
    }

    public function transactionType()
    {
        return $this->belongsTo(TransactionsType::class, 'transactions_types_UUID', 'UUID');
    }

    public function cost()
    {
        return $this->belongsTo(Cost::class, 'cost_UUID', 'UUID');
    }

}
