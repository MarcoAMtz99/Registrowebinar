<?php

namespace App\Http\Controllers;
use App\Registro;
use App\Factura;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('registro.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return "Si funciono ";
        return view('registro.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);
         $request->validate([
            'nombre'=>'required|string',
            'apellidos'=>'required|string',
            'celular'=>'required|int',
            'Correo'=>'required|string'
        ]);
        if ($request->telefono == null) {
            $request->telefono ='';
        } else {
            $request->telefono = $request->telefono;
        }
            if ($request->cbmostrar =="on") {
                $request->cbmostrar = 1;
            }else{
                $request->cbmostrar = 0;
            }
        
 
      /*   $users = new Registro();  
        $users->nombre = $request->nombre;
        $users->apellidos= $request->apellidos;
        $users->celular =$request->celular;
        $users->correo  =$request->correo;
        $users->telefono =$request->telefono;
        $users->empresa =$request->empresa;
        $users->puesto =$request->puesto;
        $users->save(); */
        $nuevo = Registro::create([
             'nombre' => $request->nombre,
             'apellidos'=>$request->apellidos,
             'celular'=>$request->celular,
             'correo'=>$request->Correo,
             'telefono'=>$request->telefono,
             'empresa'=>$request->empresa,
             'puesto'=>$request->puesto,
             'Comentario'=>$request->Comentario,
             'factura'=>$request->cbmostrar,
            ]);
        $nuevo->save();
   if ($request->cbmostrar ==1) {
       $factura = new Factura();
            // $factura->id=$request->id;
            $factura->Razón_social=$request->nombre_o_razon_social;
            $factura->RFC=$request->rfc;
            $factura->Direccion=$request->calle;
            $factura->Numero_ext=$request->num_ext;
            $factura->Numero_int=$request->num_int;
            $factura->Calle=$request->calle;
            $factura->CP=$request->codigo_postal;
            $factura->Ciudad=$request->ciudad;

            $factura->Colonia=$request->colonia;

            $factura->Estado=$request->estado;
            $factura->Municipio=$request->alcaldia_o_municipio;
            $factura->Correo=$request->Correo;
            $factura->Imagen='vacio';
            $factura->Datos_pago='vacio'; 

             $factura->save();
              }
       // dd($factura,$nuevo);
        return back()->with('status','Se registro correctamente');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
