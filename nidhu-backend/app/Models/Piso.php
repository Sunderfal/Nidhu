<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Piso extends Model {
    
    use HasFactory;

    protected $table = "piso";
    protected $primaryKey = "idPiso";

    public $timestamps = false;
    
    /**
     * Devuelve la relación de los usuarios que tiene el piso
     *
     * @return HasMany
     */
    public function usuarios(): HasMany {
        return $this->hasMany(Usuario::class, "idPiso");
    }

    /**
     * Devuelve el usuario propietario del piso
     *
     * @return Usuario
     */
    public function propietario(): Usuario {
        return $this->hasOne(Usuario::class, "idPiso")->getResults();
    }

    /**
     * Devuelve la relación de los productos que tiene que comprar un piso
     *
     * @return HasMany
     */
    public function productos(): HasMany {
        return $this->hasMany(Producto::class, "idPiso");
    }

}