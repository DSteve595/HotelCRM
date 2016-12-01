<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hotel_id');
            $table->integer('booked_by_user_id');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->string('custom_reservation_number', 30);
            $table->decimal('total_price');
            $table->integer('checked_in')->default(0);
            $table->timestamps();
        });

        \App\Reservation::create([
            'hotel_id' => 1,
            'booked_by_user_id' => 2,
            'check_in_date' => date('Y-m-d'),
            'check_out_date' => date('Y-m-d', strtotime('+5 day')),
            'custom_reservation_number' => \App\Reservation::generateNewReservationNumber(),
            'total_price' => 420
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
