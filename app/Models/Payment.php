<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'id', 'id_customer', 'payment_number', 'amount',
    ];

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
