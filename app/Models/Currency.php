<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Currency extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'id', 'input_kode', 'mata_uang'
    ];

    public function placing()
    {
        return $this->hasMany(Placing::class, 'currency_id');
    }

    public function quotation()
    {
        return $this->hasMany(Quotation::class, 'currency_id');
    }
}