<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'id', 'name', 'phone', 'address',
    ];

    public function lendings()
    {
        return $this->hasMany('App\Lending');
    }
}
