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
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('cep')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('age')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();

            $table->string('schooling_level')->nullable();
            $table->string('formation')->nullable();
            $table->string('institution')->nullable();
            $table->string('hiring_type')->nullable();
            $table->string('desired_function')->nullable();
            $table->decimal('desired_salary')->nullable();
            $table->string('is_handicapped')->nullable();
            $table->string('cnh')->nullable();

            $table->longText('additional_considerations')->nullable();
            $table->string('curriculum_photo_url')->nullable();
            $table->string('is_employed')->nullable();
            $table->string('found_us')->nullable();
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
