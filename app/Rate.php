<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    
    protected $fillable = [
        'type_rate', 'rate', 'bank_name', 'days'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at'
    ];

}