<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class U_item extends Model
{
    protected $fillable = ['id', 'user_name', 'file_path'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
