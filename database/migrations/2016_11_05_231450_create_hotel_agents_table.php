<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_agents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unique();
            $table->integer('hotel_id');
            $table->boolean('is_admin')->default(0);
            $table->timestamps();
        });

        \App\HotelAgent::create([
            'user_id' => 1,
            'hotel_id' => 1,
            'is_admin' => 1
        ]);

        \App\HotelAgent::create([
            'user_id' => 3,
            'hotel_id' => 2,
            'is_admin' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_agents');
    }
}
