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
        Schema::create('etudes', function (Blueprint $table) {
            $table->id();
            $table->string('nomUniversite');
            $table->string('description');
            $table->string('ville');
            $table->string('localisation');
            $table->string('lien');
            $table->string('pays');
            $table->string('type');
            $table->string('image');
            $table->integer('statut');
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudes');
    }
};
