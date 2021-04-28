<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //
    protected $table ='faturas'; 
    protected $fillable = [
            'id',
            'Razón_social',
            'RFC',
            'Direccion',
            'Numero_ext',
            'Numero_int',
            'Colonia',
            'CP',
            'Ciudad',
            'Estado',
            'Municipio',
            'Correo',
            'Imagen',
            'Datos_pago'
    ];
}
	