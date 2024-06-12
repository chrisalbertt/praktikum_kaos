<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_kaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('Merek', 200);
            $table->string('Ukuran',200);
            $table->string('Year',200);
            $table->string('Poster',200);
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
        Schema::dropIfExists('_kaos');
    }
}
