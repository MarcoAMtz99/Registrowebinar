<?php

namespace App\Http\Controllers;
use App\Registro;
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
        $registro = Registro::get();
        return view('registro.index',compact('registro'));
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
       // dd($request->all());
         $request->validate([
            'nombre'=>'required|string',
            'apellidos'=>'required|string',
            'celular'=>'required|int',
            'correo'=>'required|string',
            'telefono'=>'required|int',
            'empresa'=>'required|string',
            'puesto'=>'required|string|min:2|max:100'
        ]);
 
      /*   $users = new Registro();  
        $users->nombre = $request->nombre;
        $users->apellidos= $request->apellidos;
        $users->celular =$request->celular;
        $users->correo  =$request->correo;
        $users->telefono =$request->telefono;
        $users->empresa =$request->empresa;
        $users->puesto =$request->puesto;
        $users->save(); */
        Registro::create($request->all());

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
