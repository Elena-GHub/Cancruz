<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
<<<<<<< Updated upstream
     /** protected $fillable = ['room_name', 'check_in_date', 'check_out_date','reserved_by', 'number_of_guests', 'breakfast', 'pet'];
     */
=======
    protected $fillable = ['room_name', 'room_price', 'breakfast_price', 'pet_price'];
>>>>>>> Stashed changes
    
    protected $guarded = ['id','price','room_name','availability'];
    
    public function User()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}