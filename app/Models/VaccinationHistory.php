<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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

    // public function user()
    // {
    //     return $this->hasOne(VaccinationHistory::class,'user_id','id');
    // }
}
