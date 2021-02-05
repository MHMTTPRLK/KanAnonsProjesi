<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Gonullu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gonullu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gonullu_id')->unsigned();
            $table->softDeletes();// soft delete table olması içinmifrate
            $table->timestamps();

            $table->foreign('gonullu_id') // baglancak id
            ->references('id') // baglana id
            ->on('users') //baglanan table
            ->cascadeOnDelete()
                ->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gonullu');
    }
}
