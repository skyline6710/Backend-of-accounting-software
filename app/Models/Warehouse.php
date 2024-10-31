<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Warehouse extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'UUID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['branch_UUID', 'warehouse_number', 'capacity', 'address', 'number_of_products_is', 'last_entry_date', 'last_dispatch_date'];

    public function branch()
    {
        return $this->belongsTo(branchs::class, 'branch_UUID', 'UUID');
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'warehouses_UUID', 'UUID');
    }

}
