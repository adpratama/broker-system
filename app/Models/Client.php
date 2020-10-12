<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    //
    use SoftDeletes;

    public $incrementing = false; // fungsi untuk membuat id bertipe string agar tidak terbaca sebagai integer

    protected $fillable = [
        'id', 'name', 'address', 'phone', 'email', 'pic', 'phone_pic'
    ];

    protected $hidden = [
        
    ];

    public function insured() 
    {
        return $this->hasMany(Insured::class, 'client_id');
    }

    public function placing()
    {
        return $this->hasMany(Placing::class, 'client_id');
    }

    public function quotation()
    {
        return $this->hasMany(Quotation::class, 'client_id');
    }
}
