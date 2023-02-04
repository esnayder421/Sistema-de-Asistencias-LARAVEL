<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    public $table ="asistencia";
    use HasFactory;
    public $primarykey = "id_asistencia";
    public $timestamps = false;
    
}
