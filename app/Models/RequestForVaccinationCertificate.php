<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestForVaccinationCertificate extends Model
{
    use HasFactory;

    protected $tabel = 'requestForvaccinationcertificates';

    protected $fillable = [
        'nic',
        'name',
        'email',
        'document',
        'age',
    ];
}

