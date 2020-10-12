<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instruct extends Model
{
    //
    protected $fillable = [
        'status',
        'date',
        'insurance_id',
        'client_id', 
        'period_from', 
        'period_to',
        'cover_type_id',
        'currency_id',
        'compensation',
        'premium_warranty',
        'kurs',
        'admin_fee',
        'rate',
        'sum_insured',
        'premi',
        'content'
    ];

    public function insurance()
    {
        return $this->belongsTo(Insurance::class, 'insurance_id', 'id');
    }

    public function insureds()
    {
        return $this->belongsTo(Insured::class, 'insured_id', 'id');
    }
}

