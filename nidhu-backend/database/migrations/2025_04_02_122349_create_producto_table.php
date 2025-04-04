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
        
        Schema::create("producto", function (Blueprint $table) {
            $table->id("idProducto");
            $table->string("nombre", 50);
            $table->string("cantidad", 50);
            // Foreign Keys
            $table->foreignId("idPiso")
                  ->constrained("piso", "idPiso")
                  ->onDelete("cascade")
                  ->onUpdate("no action");
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists("producto");
    }

};