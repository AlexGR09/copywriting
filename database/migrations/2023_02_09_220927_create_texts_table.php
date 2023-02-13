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
        Schema::create('texts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subject');
            $table->string('called');
            $table->string('hashtag');
            $table->string('img');
            $table->enum('status',['Aprovado','No aprovado']);
            $table->longText('notes');
            $table->foreignId('target_id')->constrained('targets');
            $table->foreignId('thematic_id')->constrained('thematics');
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('objective_id')->constrained('objectives');
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
        Schema::dropIfExists('texts');
    }
};
