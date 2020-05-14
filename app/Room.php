<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['room_name', 'price'];
    
    public function clients()
    {
        return $this->hasMany(Client::class);
    }
    
}