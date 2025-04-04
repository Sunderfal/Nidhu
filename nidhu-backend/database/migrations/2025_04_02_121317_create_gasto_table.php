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
        
        Schema::create("gasto", function (Blueprint $table) {
            $table->id("idGasto");
            $table->text("descripcion");
            $table->decimal("cantidad", 5, 2);
            // Foreign keys
            $table->foreignId("idUsuario")
                  ->constrained("usuario", "idUsuario")
                  ->onDelete("cascade")
                  ->onUpdate("no action");
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists("gasto");
    }

};