<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuctionHorsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auction_horses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('auction_id');
            $table->integer('sale_id');
            $table->integer('breed_id');
            $table->string('horse_name');
            $table->string('result')->nullable();
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
        Schema::dropIfExists('auction_horses');
    }
}
