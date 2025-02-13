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
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key',100)->primary();
            $table->mediumText('value');
            $table->string('expiration',45)->nullable();
        });

        Schema::create('cache_locks', function (Blueprint $table) {
            $table->string('key',100)->primary();
            $table->string('owner',100);
            $table->string('expiration',45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cache');
        Schema::dropIfExists('cache_locks');
    }
};
