<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
protected $fillable = ['room_name', 'room_price', 'breakfast_price', 'pet_price'];
    
    public function User()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}