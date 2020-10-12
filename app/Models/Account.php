<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'id', 'nama_bank', 'no_rekening', 'atas_nama'
    ];
}