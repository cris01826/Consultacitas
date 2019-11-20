<?php

namespace ControlCitas;

use Illuminate\Database\Eloquent\Model;

class Novedades extends Model
{
    protected $table='novedades';

    protected $fillable=[
       'Nombre_Paciente','Numero_Paciente','Observacion' 
    ];
}
