<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatePlanRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_plan_relations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('candidate_id')->unsigned();
            $table->foreign('candidate_id')
            ->references('id')->on('candidate')
            ->onDelete('cascade');
            $table->bigInteger('plan_id')->unsigned();
            $table->foreign('plan_id')
            ->references('id')->on('candidate_plans')
            ->onDelete('cascade');
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
        Schema::dropIfExists('candidate_plan_relations');
    }
}
