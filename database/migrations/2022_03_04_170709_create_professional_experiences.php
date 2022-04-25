<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalExperiences extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professional_experiences', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('curriculum_id')->unsigned();
            $table->foreign('curriculum_id')->references('id')
            ->on('curriculum')->onDelete('cascade');
            $table->string('name_company');
            $table->string('company_field');
            $table->string('occupied_job');
            $table->string('years');
            $table->string('months');
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
        Schema::dropIfExists('professional_experiences');
    }
}
