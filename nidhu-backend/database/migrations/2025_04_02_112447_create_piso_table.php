<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    
    /**
     * Run the migrations.
     */
    public function up(): void {
        
        Schema::create("piso", function (Blueprint $table) {
            $table->id("idPiso");
            $table->string("nombre", 50);
            // Foreing Keys
            $table->foreignId("idPropietario")
                  ->constrained("usuario", "idUsuario")
                  ->onDelete("cascade")
                  ->onUpdate("no action");
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists("piso");
    }

};