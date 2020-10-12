<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CoverType extends Model
{
    //    
    use SoftDeletes;

    protected $fillable = [
        'id', 'input_kode', 'deskripsi'
    ];

    public function quotation()
    {
        return $this->hasMany(Quotation::class, 'cover_type_id');
    }
}