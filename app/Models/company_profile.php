<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class company_profile extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'UUID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['company_UUID', 'profile_name', 'description', 'logo'];

    public function company()
    {
        return $this->belongsTo(companies::class, 'company_UUID', 'UUID');
    }
}
