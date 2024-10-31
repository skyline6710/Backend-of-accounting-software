<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvoiceAudits extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'UUID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['invoices_UUID', 'total_price'];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'invoices_UUID', 'UUID');
    }
}
