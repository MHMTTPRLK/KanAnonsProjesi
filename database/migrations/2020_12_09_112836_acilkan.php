<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Acilkan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acilkan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('anons_name');
            $table->string('anons_surname');
            $table->string('anons_phone');
            $table->string('anons_kan');
            $table->text('anons_detay');
            $table->integer('sehir');
            $table->integer('ilce');
            $table->softDeletes();// soft delete table olması içinmifrate
            $table->timestamps();

            $table->foreign('user_id') // baglancak id
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
        Schema::dropIfExists('acilkan');
    }
}
