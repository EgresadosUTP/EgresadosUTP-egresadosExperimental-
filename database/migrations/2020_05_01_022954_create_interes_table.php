<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInteresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreInteres');
            $table->timestamps();
        });

        // Tabla pivote
        // Schema::create('interes_noticia', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('nombreInteres');
        //     $table->timestamps();
        //     create a unique id combining article_id & tag_id
        //     $table->unique(['article_id','tag_id']); 
        //     The foreing keys of the table:
        //     $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
        //     $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interes');
    }
}
