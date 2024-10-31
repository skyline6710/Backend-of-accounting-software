<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;

    protected $primaryKey = 'UUID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['cost'];

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'cost_UUID', 'UUID');
    }
}
