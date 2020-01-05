<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_venues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('merchant_id');
            $table->string('name');
            $table->string('slug');
            $table->text('banner');
            $table->string('type')->comment("VENUE | CATERING_VENUE");
            $table->float('charge_per_night', 20, 2)->nullable();
            $table->bigInteger('guest_capacity');
            $table->string('phone');
            $table->text('address');
            $table->string('city');
            $table->string('state');
            $table->string('pincode');
            $table->string('lat');
            $table->string('lon');
            $table->text('inclusions');
            $table->text('spaces');
            $table->text('location_description');
            $table->text('accommodation');
            $table->string('event_space')->comment("Yes | No");
            $table->string('events_type')->comment("Pre wedding | Reception | Wedding ceremonies");
            $table->string('catering_policy')->comment("In-house catering | External catering");
            $table->string('alcohol_policy')->comment("Service based | Do it yourself");
            $table->string('indian_cuisines')->comment("Rajasthani | North Eastern | Mughlai");
            $table->string('western_cuisines')->comment("Italian | Mexican");
            $table->string('oriental_cuisines')->comment("Chinese");
            $table->string('modes_of_payment')->comment("Cash | Credit Card | NEFT");
            $table->string('cancellation_policy')->comment("Refund | No Refund");
            $table->string('limit_for_celebration')->comment("Yes | No");
            $table->string('restrictions')->comment("Yes | No");
            $table->boolean('active');
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
        Schema::dropIfExists('master_venues');
    }
}
