<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->integer('number_of_guests')->default(1);
            $table->integer('number_of_children')->default(0);
            $table->boolean('availability')->default(true);
            $table->integer('total_price')->nullable();
            $table->boolean('breakfast')->default(false);
            $table->boolean('pet')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_user');
    }
}