<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Insured extends Model
{
    //
    use SoftDeletes;
    public $incrementing = false;

    protected $fillable = [
        'id', 'name', 'address', 'phone', 'email', 'pic', 'phone_pic', 'client_id'
    ];

    protected $hidden = [
        
    ];
    public function client() 
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    public function quotation()
    {
        return $this->hasMany(Quotation::class, 'insured_id');
    }

    public function invoice()
    {
        return $this->hasMany(Invoice::class, 'invoice_id');
    }

    public function placing()
    {
        return $this->hasMany(Placing::class, 'insured_id');
    }
}

