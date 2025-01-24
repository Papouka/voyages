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
        Schema::create('reserve', function (Blueprint $table) {
            $table->id();
            $table->string('nom',55);
            $table->string('email',45);
            $table->string('destination',45);
            $table->date('date_depart');
            $table->string('nombre_billets',45);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserve');
    }
};
