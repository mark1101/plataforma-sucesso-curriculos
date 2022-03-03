<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurriculumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->string('name');
            $table->string('address');
            $table->string('state');
            $table->string('city');
            $table->integer('age');
            $table->string('phone');
            $table->string('whatsapp');
            $table->string('email');
            $table->string('gender');
            $table->boolean('is_employed');
            $table->boolean('is_handicapped');
            $table->string('cnh');
            $table->float('desired_salary');
            $table->string('hiring_type');
            $table->string('desired_function');
            $table->string('schooling_level');
            $table->string('formation');
            $table->string('occupied_job');
            $table->float('experience_time');
            $table->string('company_field');
            $table->string('courses');
            $table->string('additional_considerations', 500);
            $table->string('curriculum_photo_url');
            $table->string('found_us');
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
        Schema::dropIfExists('curriculum');
    }
}
