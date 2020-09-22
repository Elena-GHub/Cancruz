<?php

use Illuminate\Database\Seeder;
use App\Client;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        factory(\App\User::class)->create(['first_name' => 'Deyvid', 'last_name' => 'Cruz', 'email' => 'deyvid.cruz@cancruz.com', 'admin' => '1']);
        factory(\App\Room::class)->create(['room_name' => 'Suite PUIGRACIÓS', 'room_price' => 85]);
        factory(\App\Room::class)->create(['room_name' => 'Suite SANT CRISTÒFOL', 'room_price' => 85]);
        factory(\App\Room::class)->create(['room_name' => 'Suite ROCACENTELLA', 'room_price' => 85]);
        $this->call(ClientSeeder::class);
    }
}