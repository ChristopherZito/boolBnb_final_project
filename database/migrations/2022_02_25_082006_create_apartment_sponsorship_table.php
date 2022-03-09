<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentSponsorshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartment_sponsorship', function (Blueprint $table) {
            $dateTime = date('y-m-d h:i:s');
            $table->id();
            $table->dateTime('payment_dateTime')->default($dateTime);
            $table->dateTime('start_sponsorship')->default($dateTime);
            $table->dateTime('end_sponsorship')->default($dateTime);

            $table->unsignedBigInteger('apartment_id');
            $table->unsignedBigInteger('sponsorship_id');

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
        Schema::dropIfExists('apartment_sponsorship');
    }
}
