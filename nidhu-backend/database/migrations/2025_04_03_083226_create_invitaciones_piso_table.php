<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    
    /**
     * Run the migrations.
     */
    public function up(): void {
        
        Schema::create("invitaciones_piso", function (Blueprint $table) {
            $table->primary(["idUsuario", "idInvitado"]);
            // Foreign Keys como PK compuesta
            $table->foreignId("idUsuario")
                  ->constrained("usuario", "idUsuario")
                  ->onDelete("cascade")
                  ->onUpdate("no action");
            $table->foreignId("idInvitado")
                  ->constrained("usuario", "idUsuario")
                  ->onDelete("cascade")
                  ->onUpdate("no action");
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists("invitaciones_piso");
    }

};