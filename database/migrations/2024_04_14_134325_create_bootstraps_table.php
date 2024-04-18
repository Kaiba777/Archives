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
        Schema::create('bootstraps', function (Blueprint $table) {
            $table->id();
            $table->string('motsCle');
            $table->longText('Contenu 1');
            $table->longText('Contenu 2')->nullable();
            $table->longText('explication')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bootstraps');
    }
};
