<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Insurance extends Model
{
    //
    use SoftDeletes;
    public $incrementing = false;

    protected $fillable = [
        'id', 'name', 'office', 'address', 'phone', 'email', 'pic', 'phone_pic'
    ];

    public function placing()
    {
        return $this->hasMany(Placing::class, 'insurance_id');
    }

    public function quotation()
    {
        return $this->hasMany(Quotation::class, 'insurance_id');
    }

    public function kwitansi()
    {
        return $this->hasMany(Kwitansi::class, 'insurance_id');
    }
}
