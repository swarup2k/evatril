<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('merchant_id')->nullable();
            $table->string('mobile', 20);
            $table->string('alt_mobile', 20);
            $table->string('email');
            $table->string('pincode',10);
            $table->string('area');
            $table->string('state');
            $table->string('city');
            $table->text('address');
            $table->string('lat');
            $table->string('lon');
            $table->string('venue_type');
            $table->string('business_type');
            $table->string('venue_category');
            $table->string('hall_nos');
            $table->string('lawn_nos');
            $table->text('amenities');
            $table->foreign('merchant_id')
                ->references('id')->on('merchants')
                ->onDelete('set null');
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
        Schema::dropIfExists('venues');
    }
}
