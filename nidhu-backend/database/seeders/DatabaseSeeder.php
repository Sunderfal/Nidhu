<?php

namespace Database\Seeders;

use App\Models\{Usuario, Piso, Tarea, Gasto, Producto};
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    
    /**
     * Seed the application's database.
     */
    public function run(): void {
        
        $this->call(UsuarioSeeder::class);
        
        $usuarios = Usuario::factory(20)->create();
        $pisos = Piso::factory(10)
                     ->create()
                     ->map(fn($piso) => $piso->only(["idPiso", "idPropietario"]));

        foreach($usuarios as $usuario) {
            
            $i = 0;

            while($i < count($pisos) && $usuario->idUsuario != $pisos[$i]["idPropietario"]) {
                $i++;
            }
            
            // Asignamos el piso del usuario al del que es propietario, o a uno aleatorio
            $usuario->update([
                "idPiso" => $i < count($pisos) ? $pisos[$i]["idPiso"] : rand(1, 10)
            ]);

        }
        
        Tarea::factory(15)->create();
        Gasto::factory(5)->create();
        Producto::factory(30)->create();

    }

}