<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['id', 'user_name'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
