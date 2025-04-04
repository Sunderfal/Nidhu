<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    
    /**
     * Run the migrations.
     */
    public function up(): void {
        
        Schema::create("usuario", function (Blueprint $table) {
            $table->id("idUsuario");
            $table->string("nombre", 50);
            $table->string("email", 255)->unique();
            $table->char("password", 60);
            $table->boolean("admin")->default(false);
            $table->text("avatar")->nullable();
            $table->timestamps();
            // Foreign Keys (asignada en otro archivo para evitar dependencias circulares)
            $table->unsignedBigInteger("idPiso")->nullable();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists("usuario");
    }

};