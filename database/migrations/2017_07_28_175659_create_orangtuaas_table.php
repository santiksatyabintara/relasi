<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrangtuaasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orangtuaas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('')->unsigned()
            $table->foreign('orangtua_id')references('id')
                  ->on('orangtuas')
                  ->onUpdate('cascade')
                  ->onDelete('cascade')
            $table->
            $table      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orangtuaas');
    }
}
