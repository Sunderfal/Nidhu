<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Authenticatable {

    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "usuario";
    protected $primaryKey = "idUsuario";
    protected $fillable = ["nombre", "email", "password", "avatar", "idPiso"];
    protected $hidden = ["password"];

    /**
     * Devuelve el piso al que pertenece el usuario
     *
     * @return Piso
     */
    public function piso(): Piso {
        return $this->belongsTo(Piso::class, "idPiso")->getResults();
    }

    /**
     * Devuelve la relacion de las tareas asignadas al usuario
     *
     * @return HasMany
     */
    public function tareas(): HasMany {
        return $this->hasMany(Tarea::class, "idUsuario");
    }

    /**
     * Devuelve la relación de los gastos que tiene el usuario
     *
     * @return HasMany
     */
    public function gastos(): HasMany {
        return $this->hasMany(Gasto::class, "idUsuario");
    }

    /**
     * Devuelve la relación de las invitaciones que el usuario ha hecho a otros usuarios
     *
     * @return BelongsToMany
     */
    public function usuariosInvitados(): BelongsToMany {
        return $this->belongsToMany(Usuario::class, "invitaciones_piso", "idUsuario", "idInvitado");
    }

    /**
     * Devuelve la relación de las invitaciones de otros usuarios que tiene el usuario
     *
     * @return BelongsToMany
     */
    public function invitaciones(): BelongsToMany {
        return $this->belongsToMany(Usuario::class, "invitaciones_piso", "idInvitado", "idUsuario");
    }

}