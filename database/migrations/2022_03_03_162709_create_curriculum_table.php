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
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
            $table->bigInteger('experiences_professional_id')->unsigned();
            $table->foreign('experiences_professional_id')
                ->references('id')->on('professional_experiences')
                ->onDelete('cascade');
            $table->bigInteger('courses_id')->unsigned();
            $table->foreign('courses_id')
                ->references('id')->on('courses')
                ->onDelete('cascade');
            $table->string('name');
            $table->string('address');
            $table->string('cep');
            $table->string('state');
            $table->string('city');
            $table->integer('age');
            $table->string('phone');
            $table->string('whatsapp');
            $table->string('email');
            $table->string('gender');

            $table->string('schooling_level');
            $table->string('formation');
            $table->string('institution');
            $table->string('hiring_type');
            $table->string('desired_function');
            $table->decimal('desired_salary');
            $table->boolean('is_handicapped');
            $table->string('cnh');

            $table->longText('additional_considerations');
            $table->string('curriculum_photo_url');
            $table->boolean('is_employed');
            $table->string('found_us');
            $table->boolean('active')->default(1);
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
