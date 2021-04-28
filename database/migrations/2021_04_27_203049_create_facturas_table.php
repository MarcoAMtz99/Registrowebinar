<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->string('Razón_social');
            $table->string('RFC');
            $table->string('Direccion');
            $table->string('Calle');
            $table->string('Numero_ext');
            $table->string('Numero_int');
            $table->string('Colonia');
             $table->string('CP');
              $table->string('Ciudad');
               $table->string('Estado');
                $table->string('Municipio');
                 $table->string('Correo');
                  $table->string('Imagen');
                   $table->string('Datos_pago');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
