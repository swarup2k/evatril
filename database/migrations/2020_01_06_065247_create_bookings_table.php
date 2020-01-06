<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('venue_id');
            $table->unsignedBigInteger('merchant_id');
            $table->string('name');
            $table->string('mobile');
            $table->string('email');
            $table->bigInteger('total_guest');
            $table->unsignedBigInteger('slot_id');
            $table->date('booking_date');
            $table->float('total_amount', 15,2);
            $table->float('advance_amount', 15,2);
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
        Schema::dropIfExists('bookings');
    }
}
