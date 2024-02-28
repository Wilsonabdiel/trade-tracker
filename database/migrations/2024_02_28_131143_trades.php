<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trades', function(Blueprint $table){

            $table->id();
            $table->float('entry_point');
            $table->float('exit_point');
            $table->float('sl');
            $table->float('tp');
            $table->string('fundamentals');
            $table->string('technicals');
//    Add chart.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trades');
    }
};
