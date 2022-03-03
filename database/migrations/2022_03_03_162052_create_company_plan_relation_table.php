<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyPlanRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_plan_relation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->nullable()->constrained('company');
            $table->foreignId('plan_id')->nullable()->constrained('company_plan');
            $table->float('quantity');
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
        Schema::dropIfExists('company_plan_relation');
    }
}
