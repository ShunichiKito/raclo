<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stylist_profile_image extends Model
{
     protected $fillable = ['user_name', 'file_path'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


