<?php

namespace App;
use App\Room;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'first_name','last_name', 'email', 'phone_number', 'comments',
         'guests', 'room_id', 'pet', 'breakfast','check_in_date', 'check_out_date'
    ];
    
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    
    public function getBreakfastAttribute($value)
    {
        if ($value === 1)
        {
            return "Sí";
        }
        if ($value === 0)
        {
            return "No";
        }
    }

    public function getPetAttribute($value)
    {
        if ($value === 1)
        {
            return "Sí";
        }
        if ($value === 0)
        {
            return "No";
        }
    }
    
}