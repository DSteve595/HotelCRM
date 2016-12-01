<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_guests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unique();
            $table->string('phone_number', 10)->nullable();
            $table->timestamps();
        });

        \App\HotelGuest::create([
            'user_id' => 2,
            'phone_number' => '1233332323'
        ]);

        \App\HotelGuest::create([
            'user_id' => 3,
            'phone_number' => '1414141414'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_guests');
    }
}
