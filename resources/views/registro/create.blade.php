@extends('master')
@section('content')
<div class="card w-95">
    <div class="row justify-content-center">
            <div class="col-md-9">
                <h5 class="sub-heading-1 text-center-xs">Registro</h5>
              
                @if (session()->has('status'))
            <div class="alert alert-success">{{session('status')}}
                    </div>
                @endif 
                <form action="{{route('registro.store')}}" method="POST" id="miForm" name="fvalida"  onsubmit="return validar()">
                    <div class="col-sm-6 ">
                         <div class="form-group">
                                <input type="text" name="nombre" id="nombre "class="form-control" value="{{old('nombre')}}" placeholder="*Nombre">
                                <span class="help-block">{{$errors->first('nombre')}} </span>
                            </div>
                    </div>
                    <div class="col-sm-6 ">
                        <div class="form-group">
                    <input type="text" name="apellidos" id="apellidos "class="form-control" value="{{old('apellidos')}}" placeholder="*Apellidos">      
                                    <span class="help-block">{{$errors->first('apellidos')}} </span>
                            </div>
                    </div>
                        <div class="col-sm-6 ">                      
                    <div class="form-group">

                        <input type="number" name="celular" id="celular "class="form-control" value="{{old('celular')}}" placeholder="*Celular / Whatsapp">
                        <span class="help-block">{{$errors->first('celular')}} </span>
                    </div>
                        </div> 
                        <div class="col-sm-6 "> 
                    <div class="form-group">
                        <input type="text" name="correo" id="correo " class="form-control" value="{{old('correo')}}" placeholder="*Correo electronico">
                        <span class="help-block">{{$errors->first('correo')}} </span>
                    </div>
                        </div>  
                        <div class="col-sm-6 ">
                    <div class="form-group">
                        <input type="text" name="telefono" class="form-control" value="{{old('telefono')}}" placeholder="Telefono">
                        <span class="help-block">{{$errors->first('telefono')}} </span>
                    </div>
                        </div>
                        <div class="col-sm-6 "> 
                    <div class="form-group">
                        <input type="text" name="empresa" class="form-control" value="{{old('empresa')}}" placeholder="Nombre de la empresa">
                        <span class="help-block">{{$errors->first('empresa')}} </span>
                    </div>
                        </div>
                        <div class="col-sm-12 "> 
                    <div class="form-group">
                        <input type="text" name="puesto" class="form-control" value="{{old('puesto')}}" placeholder="Puesto ">
                        <span class="help-block">{{$errors->first('puesto')}} </span>
                    </div>
                         </div>    
                         
                         <div class="col-sm-12 "> 
                            <div class="form-group">
                                
                               SI <input name="aviso" type="radio" value="SI" onclick="acepto()" />    
                               NO <input name="aviso" type="radio" value="NO" onclick="negado()" />    
                                <a target="_blank" href="{{asset('files/Aviso de privacidad B&W.pdf')}}">Acepto aviso de privacidad termino de condiciones</a>
                              
                             </div>
                                 </div>        
                        <div class="col-sm-12 col-xs-12"> 
                    <div class="form-group">
                        <input type="submit" value="Enviar registro" id="boton" class="btn btn-primary" disabled="disabled" >
                        
                    </div>
                    {{ csrf_field()}}
                         </div>              
                </form>
                    
    
                <script>
                    function negado()
                    {
                        document.getElementById("boton").disabled=true;
                      
                    }
                    function acepto()
                    {
                        document.getElementById("boton").disabled=false;
                                 
                    }
                    function validar(){
                        var nombre = document.fvalida.nombre.value.length;
                            var apellidos = document.fvalida.apellidos.value.length;
                            var celular = document.fvalida.celular.value.length;
                                var correo = document.fvalida.correo.value.length;
                                 if (nombre === 0 || apellidos === 0 || celular === 0 || correo === 0) {
                                     alert("Completa todos los campos requeridos \n *NOMBRE *APELLIDOS *CELULAR *CORREO");
                                     /* document.fvalida.nombre.focus();
                                     document.fvalida.apellidos.focus();
                                     document.fvalida.celular.focus();
                                     document.fvalida.correo.focus(); */
                                     return false;
                                             }else{ return true;
                                        }
                                        
                                    }

                 /*    function validarfff(){
                        
                        if (document.fvalida.nombre.value.length==0){
      		            alert("El campo nombre es requerido por favor ingrese sus datos.");
      		            document.fvalida.nombre.focus();
                          document.getElementById("boton").disabled=true;
      		            return false;
   	                    }
                           if (document.fvalida.apellidos.value.length==0){
      		            alert("El campo apellidos es requerido por favor ingrese sus datos.");
      		            document.fvalida.apellidos.focus();
                          document.getElementById("boton").disabled=true;
      		            return false;
   	                    }
                           if (document.fvalida.celular.value.length==0){
      		            alert("El campo celular es requerido por favor ingrese sus datos.")
      		            document.fvalida.celular.focus();
                          document.getElementById("boton").disabled=true;
      		            return false;
   	                    }
                        if (document.fvalida.correo.value.length==0){
      		            alert("El campo correo es requerido por favor ingrese sus datos.")
      		            document.fvalida.correo.focus();
                        document.getElementById("boton").disabled=true;
      		            return false;
   	                    }
                           document.getElementById("boton").disabled=false;
                           alert("Muchas gracias registrarse al webinar");
   	                        //document.fvalida.submit();
                    } */
                  
                    
                    
</script>
                  


            </div> 
        
    </div>
</div>
          
@endsection