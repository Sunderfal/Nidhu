<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piso extends Model {
    
    use HasFactory;

    protected $table = "piso";
    protected $primaryKey = "idPiso";

    public $timestamps = false;
 
}