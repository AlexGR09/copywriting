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
        Schema::create('tax_data', function (Blueprint $table) {
            $table->id();
            $table->string('curp');
            $table->string('rfc');
            $table->string('tax_regime');
            $table->json('address');
            $table->foreignId('doctor_id')->constrained('doctors');
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
        Schema::dropIfExists('tax_data');
    }
};