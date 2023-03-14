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
        Schema::create('project_tag', function (Blueprint $table) {
            $table->id();

            // // metto le colonne 
            // $table->unsignedBigInteger('project_id');
            // $table->unsignedBigInteger('tag_id');
            // // Assegno la relazione
            // $table->foreign('project_id')->references('id')->on('projects');
            // $table->foreign('tag_id')->references('id')->on('tags');

            // !OPPURE(scrivo meno righe)|| cascade= cancello a cascata anche i dati della(il dato che cancello) tabella ponte:
            $table->foreignId('project_id')->constrained()->onDelete('cascade');
            $table->foreignId('tag_id')->constrained()->onDelete('cascade');


            // elimino il timestamps perchè non mi serve, nel caso in cui lo usassi dovrò aggiungere ->withTimeStamps nel modello
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_tag');
    }
};
