<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Placing extends Model
{
    //
    public $incrementing = true;
    
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
        'rate',
        'sum_insured',
        'premi',
        'content'
    ];

    public function insurance()
    {
        return $this->belongsTo(Insurance::class, 'insurance_id', 'id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    public function covertype()
    {
        return $this->belongsTo(CoverType::class, 'cover_type_id', 'input_kode');
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_id', 'input_kode');
    }
}
