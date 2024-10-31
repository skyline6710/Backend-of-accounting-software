<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['invoice_types_id', 'total_price', 'quantity', 'discount'];

    public function invoiceType()
    {
        return $this->belongsTo(InvoiceTypes::class, 'invoice_types_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(InvoiceProduct::class, 'invoices_id', 'id');
    }

    public function audit()
    {
        return $this->hasOne(InvoiceAudits::class, 'invoices_id', 'id');
    }
}
