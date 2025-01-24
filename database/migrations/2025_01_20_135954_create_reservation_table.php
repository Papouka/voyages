<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('email');
            $table->string('destination');
            $table->date('date_depart');
            $table->string('nombre_billets');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reservation');
    }
};
