<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccinationAnnouncment extends Model
{
    use HasFactory;

    protected $table = 'vaccinationannouncments';

    protected $fillable =[
        'date',
        'vaccine',
        'venue',
        'age',
        'dosage'
    ];
}
