<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \Illuminate\Support\Facades\DB;

class CreateEstablishmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establishments', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->char('country_id', 2)->default('PE');
            $table->char('department_id', 2)->default('25');
            $table->char('province_id', 4)->default('2501');
            $table->char('district_id', 6)->default('250101');
            $table->string('address');
            $table->string('email');
            $table->string('telephone');
            $table->string('code');
            $table->string('trade_address')->nullable();
            $table->string('web_address')->nullable();
            $table->string('aditional_information')->nullable();
            $table->timestamps();

            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->foreign('district_id')->references('id')->on('districts');
        });

        DB::table('establishments')->insert(config('genesysBusiness.data'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establishments');
    }
}
