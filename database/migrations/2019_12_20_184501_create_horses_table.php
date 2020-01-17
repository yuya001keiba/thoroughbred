<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('breed_id')->unique('');
            $table->string('horse_name');
            $table->string('gender');
            $table->date('birthday');
            $table->string('color');
            $table->string('sire');
            $table->string('dam');
            $table->string('broodmare_sire');
            $table->string('breeding_farm');
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
        Schema::dropIfExists('horses');
    }
}
