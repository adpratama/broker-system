<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kwitansi extends Model
{
    //
    protected $fillable = [
        'invoice_id',
        'insurance_id',
        'client_id',
        'currency_id',
        'quotation_id',
        'jumlah_pembayaran',
        'jenis_pembayaran',
        'bankers',
        'no_rekening',
        'date'
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'invoice_id', 'id');
    }

    public function insurance()
    {
        return $this->belongsTo(Insurance::class, 'insurance_id', 'id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_id', 'input_kode');
    }

}