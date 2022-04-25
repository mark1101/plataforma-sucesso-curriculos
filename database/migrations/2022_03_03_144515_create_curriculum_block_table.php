<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurriculumBlockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum_block', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('curriculum_id')->unsigned();
            $table->foreign('curriculum_id')->references('id')
            ->on('curriculum')->onDelete('cascade');
            $table->string('cnpj')->nullable();
            $table->timestamps();
            //colocar aqui o on delete cascade
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculum_block');
    }
}
