<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
     /** protected $fillable = ['room_name', 'check_in_date', 'check_out_date','reserved_by', 'number_of_guests', 'breakfast', 'pet'];
     */
    
    protected $guarded = ['id','price','room_name','availability'];
    
    public function User()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}