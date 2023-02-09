<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('text_descriptions', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->foreignId('sub_objective_id')->constrained('sub_objectives');
            $table->foreignId('text_id')->constrained('texts');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('text_descriptions');
    }
};
