<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'status',
        'quotation_id',
        'date',
        'policy_number',
        'particulars',
        'policy_cost',
        'stamp_duty',
        'others',
        'sign_for',
        'admin_cost'
    ];

    public function quotation()
    {
        return $this->belongsTo(Quotation::class, 'quotation_id', 'id');
    }
}
