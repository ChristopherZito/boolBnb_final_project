<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->tinyInteger('rooms') -> unsigned();
            $table->tinyInteger('beds') -> unsigned();
            $table->tinyInteger('bathrooms') -> unsigned();
            $table->smallInteger('square_meters') -> unsigned();
            $table->string('address');
            $table->string('city', 60);
            $table->float('latitude' , 10,7);
            $table->float('longitude' , 10,7);
            $table->string('image');
            $table->boolean('visibility')-> default(1);
            
            $table->unsignedBigInteger('user_id');

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
        Schema::dropIfExists('apartments');
    }
}
