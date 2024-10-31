<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'UUID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'warehouses_UUID', 'title', 'description', 'quantity_in_warehouse',
        'selling_price', 'buying_price', 'avatar'
    ];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class, 'warehouses_UUID', 'UUID');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'products_UUID', 'UUID');
    }


}
