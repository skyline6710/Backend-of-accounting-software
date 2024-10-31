<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $primaryKey = 'UUID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'users_UUID', 'full_name', 'phone_number', 'address', 'avatar', 'gender'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_UUID', 'UUID');
    }
}
