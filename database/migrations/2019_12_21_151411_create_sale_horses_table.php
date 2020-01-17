<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleHorsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_horses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('breed_id');
            $table->string('horse_name');
            $table->integer('category_id');
            $table->integer('price');
            $table->string('applicant');
            $table->string('tel');
            $table->string('video');
            $table->text('point');
            $table->timestamps();
            
            // 外部キー制約
            $table->foreign('breed_id')->references('breed_id')->on('horses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sale_horses');
    }
}
