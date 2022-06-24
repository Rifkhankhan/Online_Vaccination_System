<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccinationHistory extends Model
{
    use HasFactory;

    protected $table = 'vaccinationhistorys';

    protected $fillable =[
        'passport',
        'date',
        'vac_product',
        'batch_number',
        'vac_status',
        'user_id'

    ];
}
