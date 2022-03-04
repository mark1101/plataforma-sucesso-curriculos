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
            $table->foreignId('company_id')->nullable()->constrained('company');
            $table->foreignId('curriculum_id')->nullable()->constrained('curriculum');
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
