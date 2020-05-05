<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lending extends Model
{
    protected $fillable = [
        'id', 'id_customer', 'amount', 'n_payments', 'rate', 'total', 'date_ministry', 'due_date'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function payments()
    {
        return $this->hasMany('App\Payment');
    }
}
