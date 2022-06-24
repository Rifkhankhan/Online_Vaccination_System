<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestCertificate extends Model
{
    use HasFactory;

    protected $table = 'requestcertificate';
    protected $fillable = [
        'nic',
        'name',
        'email',
        'age',
        'status',
        'user_id'
    ];
}
