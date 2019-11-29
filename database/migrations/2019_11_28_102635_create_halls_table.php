<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('venue_id');
            $table->string('type')->comment('LAWN/HALL');
            $table->string('area_size');
            $table->string('capacity_row');
            $table->string('capacity_floating');
            $table->float('booking_amount',12,2);
            $table->foreign('venue_id')
                ->references('id')->on('venues')
                ->onDelete('cascade');
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
        Schema::dropIfExists('halls');
    }
}
