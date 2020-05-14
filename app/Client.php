<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'first_name','last_name', 'email', 'phone_number', 'comments',
         'guests', 'room_id', 'pet', 'breakfast','check_in_date', 'check_out_date'
    ];
    
    public function Room()
    {
        return $this->belongsTo(Room::class);
    }
    
    public function getBreakfastAttribute($value)
    {
        if ($value === 1)
        {
            return "Sí";
        }
        return "No";
    }
    
    public function setBreakfastAttribute($value)
    {
        if ($value === "Sí")
        {
            $this->attributes['breakfast'] = 1;
        }
        $this->attributes['breakfast'] = 0;
    }
    
}