<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReciveBkashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recive_bkashes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bkash_id');
            $table->integer('status')->default(0);
            $table->timestamps();
            $table->foreign('bkash_id')->references('id')->on('bkashes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recive_bkashes');
    }
}
