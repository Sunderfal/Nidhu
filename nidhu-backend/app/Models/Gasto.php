<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gasto extends Model {
    
    use HasFactory;

    protected $table = "gasto";
    protected $primaryKey = "idGasto";

    public $timestamps = false;
 
}