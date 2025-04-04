<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    
    /**
     * Run the migrations.
     */
    public function up(): void {
        
        Schema::create("tarea", function (Blueprint $table) {
            $table->id("idTarea");
            $table->string("titulo", 50);
            $table->text("descripcion");
            $table->date("fecha");
            // Foreign Keys
            $table->foreignId("idUsuario")
                  ->nullable()
                  ->constrained("usuario", "idUsuario")
                  ->onDelete("set null")
                  ->onUpdate("no action");
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists("tarea");
    }

};