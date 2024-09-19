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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('nomUser');
            $table->unsignedBigInteger("Identifiant_expert")->nullable();
            $table->string('prenomUser');
            $table->string('description');
            $table->integer('telephone');
            $table->string('email');
            $table->string('type')->nullable();
            $table->integer('statut')->default(0);
            $table->string('slug')->nullable();
            // $table->unsignedBigInteger("id_expert");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
