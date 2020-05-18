<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< Updated upstream
        factory(\App\User::class)->create(['first_name' => 'Deyvid', 'last_name' => 'Cruz', 'email' => 'deyvid.cruz@cancruz.com', 'admin' =>'1' ]);
        factory(\App\Room::class)->create(['room_name' => 'Suite PUIGRACIÓS']);
        factory(\App\Room::class)->create(['room_name' => 'Suite SANT CRISTÒFOL']);
        factory(\App\Room::class)->create(['room_name' => 'Suite ROCACENTELLA']);
        factory(\App\User::class, 5)->create();
=======
        factory(\App\User::class)->create(['first_name' => 'Deyvid', 'last_name' => 'Cruz', 'email' => 'deyvid.cruz@cancruz.com', 'admin' => '1']);
        factory(\App\Room::class)->create(['room_name' => 'Suite PUIGRACIÓS', 'room_price' => 85]);
        factory(\App\Room::class)->create(['room_name' => 'Suite SANT CRISTÒFOL', 'room_price' => 85]);
        factory(\App\Room::class)->create(['room_name' => 'Suite ROCACENTELLA', 'room_price' => 85]);
        $this->call(ClientSeeder::class);
>>>>>>> Stashed changes
    }
}