<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stylist extends Model
{
     protected $fillable = [
        'stylist_name', 'age','gender','background','style','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
