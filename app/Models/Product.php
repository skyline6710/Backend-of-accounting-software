<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'warehouses_id', 'title', 'description', 'quantity_in_warehouse',
        'selling_price', 'buying_price', 'avatar'
    ];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class, 'warehouses_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'products_id', 'id');
    }


}
