@extends('pago')
@section('content')
<div class="card w-95">
    <div class="row justify-content-center">
            <div class="col-md-9">
                <h5 class="sub-heading-1 text-center-xs">Registro</h5>
              
                @if (session()->has('status'))
            <div class="alert alert-success">{{session('status')}}
                    </div>
                @endif 
                <div class="col-sm-6 ">
                    Costo del taller: $660.00 pesos IVA Incluido 
                    (*Aplican descuento para socios Coparmex, miembros de IMEXGO, miembros de Ex-a-Tec)
                        <br>
                   <strong> Formas de Pago</strong>
                    <br>
                    1) Transferencia o depósito en efectivo
                    <br>
                    Nombre de la cuenta: B&W SOLUCIONES INTEGRALES SA DE CV
                    BANCO: BANAMEX
                    CUENTA: 1031261
                    CLABE: 002180700410312616
                    <br>
                    2) Pago con tarjeta de crédito o débito
                    El pago con tarjeta de crédito o débito se hace mediante la aplicación de CLIP, por lo que si desea usar este método de pago, le solicitamos nos envíe un WhatsApp al 5569073162 donde le indicaremos la liga para realizar el pago. Aceptamos todas las tarjetas de crédito.
                    <br>
                </div>
                <hr>
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
                   <!--  <div class="form-group">
                        <input type="mail" name="correo" id="correo" class="form-control" value="{{old('correo')}}" placeholder="*Correo electronico">
                        <span class="help-block">{{$errors->first('correo')}} </span>
                    </div> -->
                     <div class="form-group">
                        <input type="mail" name="Correo" id="Correo" class="form-control" value="{{old('Correo')}}" placeholder="*Correo electronico ">
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
                    <div class="form-group">
                        <input type="text" name="Comentario" class="form-control" value="{{old('comentario')}}" placeholder="Comentario ">
                        <span class="help-block">{{$errors->first('comentario')}} </span>
                    </div>
                  
                    <!--   <div class="form-group">
                        <label for="archivo"><b>Archivo: </b></label><br>
                        <input type="file" name="archivo" required>
                        <span class="help-block">{{$errors->first('archivo')}} </span>
                    </div> -->



                         </div>    
                         
                         <div class="col-sm-12 "> 

                            <div class="form-group">
                                
                               SI <input name="aviso" type="radio" value="SI" onclick="acepto()" />    
                               NO <input name="aviso" type="radio" value="NO" onclick="negado()" />    
                                <a target="_blank" href="{{asset('files/Aviso de privacidad B&W.pdf')}}">Acepto aviso de privacidad termino de condiciones</a>
                              
                             </div>
                          </div> 
                          <div class="row mt-3">
                             <div class="col-12">
                            
                               <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                                  <label for="cbmostrar">
                                    <input type="checkbox" name="cbmostrar" class="fantasma" checked />
                                   FACTURAR
                                  </label>
                                  <div id="dvOcultar">

                                <div class="card card-body">
                                    <div class="row">
                                        <!-- <div class="col-12 col-md-3 mt-3">
                                            <label for="" class="text-uppercase text-muted">TIPO PERSONA</label>
                                            <input type="text" class="form-control" id="tipoPersona" name="tipo_persona">
                                        </div> -->
                                        <div class="col-12 col-md-3 mt-3">
                                            <label for="" class="text-uppercase text-muted">NOMBRE / RAZÓN
                                                SOCIAL</label>
                                            <input type="text" class="form-control" id="nombreORazonSocial" name="nombre_o_razon_social">
                                        </div>
                                        <!-- <div class="col-12 col-md-3 mt-3">
                                            <label for="" class="text-uppercase text-muted">RÉGIMEN FISCAL
                                                SOCIAL</label>
                                            <input type="text" class="form-control" id="regimeFiscal" name="regimen_fiscal">
                                        </div> -->
                                        <!-- <div class="col-12 col-md-3 mt-3">
                                            <label for="" class="text-uppercase text-muted">CORREO</label>
                                            <input type="text" class="form-control" id="correo" name="correo">
                                        </div> -->
                                        <div class="col-12 col-md-3 mt-3">
                                            <label for="" class="text-uppercase text-muted">RFC</label>
                                            <input type="text" class="form-control" id="rfc" name="rfc">
                                        </div>
                                       <!--  <div class="col-12 col-md-3 mt-3">
                                            <label for="" class="text-uppercase text-muted">HOMOCLAVE</label>
                                            <input type="text" class="form-control" id="homoclave" name="homoclave">
                                        </div> -->
                                        <div class="col-12 col-md-3 mt-3">
                                            <label for="" class="text-uppercase text-muted">CALLE</label>
                                            <input type="text" class="form-control" id="calle" name="calle">
                                        </div>
                                        <div class="col-12 col-md-3 mt-3">
                                            <label for="" class="text-uppercase text-muted">NUM. EXT</label>
                                            <input type="text" class="form-control" id="num_ext" name="num_ext">
                                        </div>
                                        <div class="col-12 col-md-3 mt-3">
                                            <label for="" class="text-uppercase text-muted">NUM. INT</label>
                                            <input type="text" class="form-control" id="num_int" name="num_int">
                                        </div>
                                        <div class="col-12 col-md-3 mt-3">
                                            <label for="" class="text-uppercase text-muted">CP</label>
                                            <input type="text" class="form-control" id="codigo_postal" name="codigo_postal">
                                        </div>
                                        <div class="col-12 col-md-3 mt-3">
                                            <label for="" class="text-uppercase text-muted">Ciudad</label>
                                            <input type="text" class="form-control" id="ciudad" name="ciudad">
                                        </div>
                                        <div class="col-12 col-md-3 mt-3">
                                            <label for="" class="text-uppercase text-muted">Delegación o municipio</label>
                                            <input type="text" class="form-control" id="alcaldia_o_municipio" name="alcaldia_o_municipio">
                                        </div>
                                         <div class="col-12 col-md-3 mt-3">
                                            <label for="" class="text-uppercase text-muted">Colonia</label>
                                            <input type="text" class="form-control" id="colonia" name="colonia">
                                        </div>
                                        <div class="col-12 col-md-3 mt-3">
                                            <label for="" class="text-uppercase text-muted">Estado</label>
                                            <input type="text" class="form-control" id="estado" name="estado">
                                        </div>
                                       <!--  <div class="col-12 col-md-3 mt-3">
                                            <label for="" class="text-uppercase text-muted">Uso cfdi</label>
                                            <select name="uso_cfdi" class="form-control" id="uso_cfdi">
                                                <option value="">Seleccionar</option>
                                                <option value="D01 - Honorarios médicos, dentales y gastos hospitalarios">D01 - Honorarios médicos, dentales y gastos hospitalarios</option>
                                                <option value="D02 - Gastos médicos por incapacidad o discapacidad">D02 - Gastos médicos por incapacidad o discapacidad</option>
                                                <option value="D03 - Gastos funerales">D03 - Gastos funerales</option>
                                                <option value="D04 - Donativos">D04 - Donativos</option>
                                                <option value="D05 - Interéses reales efectivamente pagados por créditos hipotecarios (casa habitación)">D05 - Interéses reales efectivamente pagados por créditos hipotecarios (casa habitación)</option>
                                                <option value="D06 - Aportaciones voluntarias al SAR">D06 - Aportaciones voluntarias al SAR</option>
                                                <option value="D08 - Gastos de transportación escolar obligatoria">D08 - Gastos de transportación escolar obligatoria</option>
                                                <option value="D09 - Depositos en cuentas para el ahorro, primas que tengan como base planes de pensión">D09 - Depositos en cuentas para el ahorro, primas que tengan como base planes de pensión</option>
                                                <option value="D10 - Pagos por servicios educativos (colegiaturas)">D10 - Pagos por servicios educativos (colegiaturas)</option>
                                                <option value="G01 - Adquisición de mercancias">G01 - Adquisición de mercancias</option>
                                                <option value="G02 - Devoluciones, descuentos o bonificaciones">G02 - Devoluciones, descuentos o bonificaciones</option>
                                                <option value="G03 - Gastos en general">G03 - Gastos en general</option>
                                                <option value="I01 - Construcciones">I01 - Construcciones</option>
                                                <option value="I02 - Moviliario y equipo de oficina por inversiones">I02 - Moviliario y equipo de oficina por inversiones</option>
                                                <option value="I03 - Equipo de transporte">I03 - Equipo de transporte</option>
                                                <option value="I04 - Equipo de cómputo y accesorios">I04 - Equipo de cómputo y accesorios</option>
                                                <option value="I05 - Dados, troqueles, moldes, matrices y herramental">I05 - Dados, troqueles, moldes, matrices y herramental</option>
                                                <option value="I06 - Comunicaciones telefónicas">I06 - Comunicaciones telefónicas</option>
                                                <option value="I07 - Comunicaciones satelitales">I07 - Comunicaciones satelitales</option>
                                                <option value="I08 - Otra maquinaria y equipo">I08 - Otra maquinaria y equipo</option>
                                                <option value="P01 - Por definir">P01 - Por definir</option>
                                            </select>
                                        </div> -->
                                    </div>
                                </div>
                           

                        </div>
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
                                 // if (nombre === 0 || apellidos === 0 || celular === 0 || correo === 0) {
                                 //     alert("Completa todos los campos requeridos \n *NOMBRE *APELLIDOS *CELULAR *CORREO");
                                 //      document.fvalida.nombre.focus();
                                 //     document.fvalida.apellidos.focus();
                                 //     document.fvalida.celular.focus();
                                 //     document.fvalida.correo.focus(); 
                                 //     return false;
                                 //             }else{ return true;
                                 //        }
                                        
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
<script type="text/javascript">
// $(document).ready(function(){


// if ($("#FACTURAR").prop("checked", false)) {
//   alert('hola en true');
// }else{
//   alert('Hola en false');
// }


//   });
$(function(){
  $('.fantasma').change(function(){
    if(!$(this).prop('checked')){
      $('#dvOcultar').hide();
    }else{
      $('#dvOcultar').show();
    }
  
  })

});

  </script>
                  


            </div> 
        
    </div>
</div>
          
@endsection