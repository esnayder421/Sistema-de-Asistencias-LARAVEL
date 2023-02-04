<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    public $table ="registro_asistencia";

    protected $fillable = ['id_estudiante','fecha_registro'];

    public $foreignkey = "id_estudiante";
    public $primarykey = "id_registro";
    public $timestamps = false;



}

