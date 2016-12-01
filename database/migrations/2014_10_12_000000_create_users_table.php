<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->integer('account_type');
            $table->rememberToken();
            $table->timestamps();
        });

        $user = \App\User::create([
            'name' => 'Bob Franklin',
            'username' => 'bobfranklin',
            'password' => \App\Utility::getHashedPassword('bobfranklin'),
            'email' => 'bobfranklin@gmail.com',
            'account_type' => \App\User::HOTEL_AGENT
        ]);

        $guest = \App\User::create([
            'name' => 'Tim Jones',
            'username' => 'timjones',
            'password' => \App\Utility::getHashedPassword('timjones'),
            'email' => 'timjones@gmail.com',
            'account_type' => \App\User::HOTEL_GUEST
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
