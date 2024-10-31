<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceTypes extends Model
{
    use HasFactory;

    protected $primaryKey = 'UUID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['type'];

    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'invoice_types_UUID', 'UUID');
    }
}
