<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('apartments', function (Blueprint $table) {

            $table 
            -> foreign('user_id', 'user_apartment')
            -> references('id')
            -> on('users');
        });

        Schema::table('messages', function (Blueprint $table) {

            $table 
            -> foreign('apartment_id', 'apartment_message')
            -> references('id')
            -> on('apartments');
        });

        Schema::table('views', function (Blueprint $table) {

            $table 
            -> foreign('apartment_id', 'apartment_view')
            -> references('id')
            -> on('apartments');
        });

        Schema::table('apartment_optional', function (Blueprint $table) {

            $table 
            -> foreign('apartment_id', 'apartment_optional')
            -> references('id')
            -> on('apartments');

            $table 
            -> foreign('optional_id', 'optional_apartment')
            -> references('id')
            -> on('optionals');
        });

        Schema::table('apartment_sponsorship', function (Blueprint $table) {

            $table 
            -> foreign('apartment_id', 'apartment_sponsorship')
            -> references('id')
            -> on('apartments');

            $table 
            -> foreign('sponsorship_id', 'sponsorship_apartment')
            -> references('id')
            -> on('sponsorships');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('apartments', function (Blueprint $table) {

            $table -> dropForeign('user_apartment');
        });

        Schema::table('messages', function (Blueprint $table) {

            $table -> dropForeign('apartment_message');
        });

        Schema::table('views', function (Blueprint $table) {

            $table -> dropForeign('apartment_view');
        });

        Schema::table('apartment_optional', function (Blueprint $table) {

            $table -> dropForeign('apartment_optional');
            $table -> dropForeign('optional_apartment');
        });

        Schema::table('apartment_sponsorship', function (Blueprint $table) {

            $table -> dropForeign('apartment_sponsorship');
            $table -> dropForeign('sponsorship_apartment');
        });
    }
}
