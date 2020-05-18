<?php

use Illuminate\Database\Seeder;
use App\Room;
use App\User;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Room::all() as $room {
            $users = \App\User::inRandomOrder()->take(1)->pluck('id');
            $room->users()->attach($users);
        }
    }
}