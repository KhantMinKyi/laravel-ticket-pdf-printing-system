<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seats', function (Blueprint $table) {
            $table->id();
            $table->string('seat');
            $table->string('seat_type')->nullable();
            $table->date('ms_date1')->nullable();
            $table->date('ms_date2')->nullable();
            $table->date('ms_date3')->nullable();
            $table->date('ms_date4')->nullable();
            $table->date('ms_date5')->nullable();
            $table->date('ms_date6')->nullable();
            $table->date('ms_date7')->nullable();
            $table->date('sm_date1')->nullable();
            $table->date('sm_date2')->nullable();
            $table->date('sm_date3')->nullable();
            $table->date('sm_date4')->nullable();
            $table->date('sm_date5')->nullable();
            $table->date('sm_date6')->nullable();
            $table->date('sm_date7')->nullable();
            $table->date('ms2_date1')->nullable();
            $table->date('ms2_date2')->nullable();
            $table->date('ms2_date3')->nullable();
            $table->date('ms2_date4')->nullable();
            $table->date('ms2_date5')->nullable();
            $table->date('ms2_date6')->nullable();
            $table->date('ms2_date7')->nullable();
            $table->date('sm2_date1')->nullable();
            $table->date('sm2_date2')->nullable();
            $table->date('sm2_date3')->nullable();
            $table->date('sm2_date4')->nullable();
            $table->date('sm2_date5')->nullable();
            $table->date('sm2_date6')->nullable();
            $table->date('sm2_date7')->nullable();
            $table->string('user_id')->nullable();
            $table->string('bus_id')->nullable();
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
        Schema::dropIfExists('seats');
    }
}
