<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('jawaban', function (Blueprint $table) {
            $table->increments('id');
            $table->text('isi');
            $table->integer('pertanyaan_id')->unsigned();
            $table->timestamps();
            

        });

        Schema::enableForeignKeyConstraints('jawaban', function(Blueprint $table){
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan')->onDelete('cascade');
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban');

    }
}
