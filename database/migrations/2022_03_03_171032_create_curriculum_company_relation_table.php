<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurriculumCompanyRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum_company_relation', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id')->unsigned();
            $table->foreign('company_id')
            ->references('id')->on('company')
            ->onDelete('cascade');
            $table->bigInteger('curriculum_id')->unsigned();
            $table->foreign('curriculum_id')
            ->references('id')->on('curriculum')
            ->onDelete('cascade');
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
        Schema::dropIfExists('curriculum_company_relation');
    }
}
