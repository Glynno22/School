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
        Schema::create('actualite_ecoles', function (Blueprint $table) {
            $table->id();
            $table->string('nomEcole');
            $table->unsignedBigInteger('Identifiant_expert');
            $table->string('description');
            $table->string('ville');
            $table->string("titre_actu");
            $table->string('image');
            $table->string('lien');
            $table->string('pays');
            $table->string('type');
            $table->integer('statut')->default(0);
            $table->string('slug')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actualite_ecoles');
    }
};
