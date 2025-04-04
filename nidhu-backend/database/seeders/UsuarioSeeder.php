<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder {
    
    /**
     * Run the database seeds.
     */
    public function run(): void {
        
        Usuario::insert([
            [
                "nombre" => "Serzh",
                "email" => "sergiovdg2016@gmail.com",
                "password" => Hash::make("12345"),
                "admin" => true
            ],
            [
                "nombre" => "SofiaB",
                "email" => "sofiabejar@gmail.com",
                "password" => Hash::make("12345"),
                "admin" => true
            ]
        ]);

    }

}