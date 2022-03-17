<div class="container">
  

<div class="modal fade" id="clientes">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				
				<h4 class="modal-title">Crear Cliente Nuevo</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				{!! Form::open(['route' => 'clientes.store', 'method'=>'POST','id'=>'FormCreateclientess']) !!}


                                                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group" >

                            <label for="id">Primer Nombre</label>
                            {!! Form::text('NOMBRE1', ' ',['class' => 'form-control nombrecompletol', 'placeholder' => 'Digite el primer nombre' ,'name'=>'NOMBRE1','id'=>'NOMBRE1L']) !!}
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="form-group" >

                            <label for="id">Segundo Nombre</label>
                            {!! Form::text('NOMBRE2', ' ',['class' => 'form-control nombrecompletol', 'placeholder' => 'Digite el segundo Nombre' ,'name'=>'NOMBRE2','id'=>'NOMBRE2L']) !!}

                        </div>    
                    </div>


                    <div class="col-md-3">

                        <div class="form-group" >
                            <label for="id">Primer Apellido</label>

                             {!! Form::text('APELLIDO1', ' ',['class' => 'form-control nombrecompletol','placeholder' => 'Digite el Primer Apellido' ,'name'=>'APELLIDO1','id'=>'APELLIDO1L']) !!}
                        </div>    

                    </div>


                    <div class="col-md-3">

                        <div class="form-group" >
                            <label for="id">Segundo Apellido</label>
                            {!! Form::text('APELLIDO2', ' ',['class' => 'form-control nombrecompletol', 'placeholder' => 'Digite el segundo Apellido' ,'name'=>'APELLIDO2','id'=>'APELLIDO2L']) !!}
                            
                        </div>    

                    </div>
                </div> {{-- cierre primer row --}}


                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group">

                            <label for="id">Nit con Digito de Verificación </label>
                            {!! Form::text('NIT', null,['class' => 'form-control','required', 'placeholder' => 'Digite Nit con Digito de Verificación' ,'name'=>'NIT','id'=>'NITL']) !!}
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="form-group" >

                            <label for="id">Nombre</label>
                            {!! Form::text('NOMBRE', null,['class' => 'form-control','required', 'placeholder' => 'Digite el nombre' ,'name'=>'NOMBRE','id'=>'nombrel', 'readonly']) !!}

                        </div>    
                    </div>


                    <div class="col-md-3">

                        <div class="form-group" >
                            <label for="id">Teléfono</label>

                            {!! Form::text('TEL1', null,['class' => 'form-control','required', 'placeholder' => 'Digite el Teléfono' ,'name'=>'TEL1']) !!}
                        </div>    

                    </div>


                    <div class="col-md-3">

                        <div class="form-group" >
                            <label for="id">Celular</label>
                            {!! Form::text('TEL2', null,['class' => 'form-control','required', 'placeholder' => 'Digite el Celular' ,'name'=>'TEL2']) !!}
                            
                        </div>    

                    </div>
                </div> {{-- cierre primer row --}}



                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group" >

                            <label for="id">Correo electrónico</label>
                            {!! Form::email('EMAIL', null,['class' => 'form-control','required', 'placeholder' => 'Digite el correo electrónico' ,'name'=>'EMAIL','id'=>'EMAILL']) !!}
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="form-group" >

                            <label for="id">Digite el Barrio</label>
                            {!! Form::text('PAGINAWEB', null,['class' => 'form-control', 'placeholder' => 'Digite el barrio' ,'name'=>'PAGINAWEB','required', 'placeholder' => 'Digite el barrio' ]) !!}

                          

                        </div>    
                    </div>


                    <div class="col-md-3">

                        <div class="form-group" >
                            <label for="id">Dirección</label>

                            {!! Form::text('DIRECCION', null,['class' => 'form-control','required', 'placeholder' => 'Digite la Dirección' ,'name'=>'DIRECCION']) !!}
                        </div>    

                    </div>


                    <div class="col-md-3">

                        <div class="form-group" >
                            <label for="id">Contacto</label>
                            {!! Form::text('CONTACTO', null,['class' => 'form-control','required', 'placeholder' => 'Digite el Contacto' ,'name'=>'CONTACTO']) !!}
                            
                        </div>    

                    </div>
                </div> {{-- cierre primer row --}}

                <div class="row">

                                  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

                           
                            {!! Form::hidden('CODRUTA', 'B09',['class' => 'form-control','required', 'placeholder' => 'Digite el Codigo' ,'name'=>'CODRUTA','readonly']) !!}

                           


                            <div class="form-group">
                                <label for="id">Tipo de Persona</label>
                                <select name="PERSONANJ" class="form-control" id='PERSONANJL' >
                                    <option value="1">Natural</option>
                                    <option value="0">Jurídica</option>
                                </select>
                            </div>
                        
                    </div>
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">

                        <div class="form-group" >
                    <label for="id">Comentario</label>

                    {!! Form::text('COMENTARIO', null,['class' => 'form-control','required', 'placeholder' => 'Digite el Comentario' ,'name'=>'COMENTARIO','maxlength' =>'100']) !!}

                </div>
                        
                    </div>

      
                </div>

<div class="row">

    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <div class="form-group" >
    
 <label for="id">Seleccione la Ruta</label>
                           
 {!! Form::select('CODRUTA',$rutas, 'B09  ' , ['class' => 'form-control','required', 'placeholder' => 'Digite el Codigo' ,'name'=>'CODRUTA']) !!}

                </div>
                        
                    </div>
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <label for="id">HANDY</label>
    {!! Form::number('DETALLE', 0,['class' => 'form-control', 'placeholder' => 'Digite el prospecto de Handy' ,'name'=>'DETALLE','MAX'=>99999,'MIN'=>0]) !!}                    

                        <div class="form-group" >
           

                    
                </div>
                        
                    </div>

      
                </div>                


                

                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group" >

                            <label for="id">Código Vendedor</label>
                            {!! Form::text('VENDEDOR',  \Auth::user()->cod_vendedor,['class' => 'form-control','required', 'placeholder' => 'Digite el Vendedor' ,'name'=>'VENDEDOR','readonly']) !!}
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="form-group" >

                            <label for="id">Canal</label>
                            {!! Form::text('CANAL', '08',['class' => 'form-control','required', 'placeholder' => 'Digite la Página WEB' ,'name'=>'CANAL','readonly']) !!}

                        </div>    
                    </div>


                    <div class="col-md-3">

                        <div class="form-group" >
                            <label for="id">Fecha Creación</label>

                            {!! Form::date('FECHAING', \Carbon\Carbon::now(),['class' => 'form-control','required', 'placeholder' => 'Digite la Fecha' ,'name'=>'FECHAING']) !!}
                        </div>    

                    </div>


                    <div class="col-md-3">

                        <div class="form-group" >
                            <label for="id"><font color="red">Lista de Precio</font></label>
                           {!! Form::text('CODPRECIO', 'BPAP',['class' => 'form-control','required', 'placeholder' => 'Digite el Contacto' ,'name'=>'CODPRECIO',' readonly']) !!}

                          <!--   {!! Form::select('CODPRECIO',['BPAP' => 'BPAP', 'BPDVO' => 'BPDVO'], 'BPAP' , ['class' => 'form-control','required','name'=>'CODPRECIO']) !!} -->

                        </div>    

                    </div>
                </div> {{-- cierre primer row --}}


                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group" >
                            
                            <label for="id">Código Ciudad</label>
                            {!! Form::text('CDCIIU', '11001',['class' => 'form-control','required', 'placeholder' => 'Digite el Vendedor' ,'name'=>'CDCIIU','readonly']) !!}
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="form-group" >
                           
                            <label for="id">Ciudad</label>
                            {!! Form::text('CIUDAD', '100',['class' => 'form-control','required', 'placeholder' => 'Digite la Ciudad' ,'name'=>'CIUDAD','readonly']) !!}
                            
                        </div>    
                    </div>


                    <div class="col-md-3">

                        <div class="form-group" >
                            <label for="id">Zona</label>
                            
                    {!! Form::text('ZONA', \Auth::user()->cod_vendedor,['class' => 'form-control','required', 'placeholder' => 'Digite la Zona' ,'name'=>'ZONA','readonly']) !!}




                    </div>

                </div>


                    <div class="col-md-3">

                        <div class="form-group" >
                            <label for="id">Departamento</label>
                            {!! Form::text('CODDEPTO', '11',['class' => 'form-control','required', 'placeholder' => 'Digite el Departamento' ,'name'=>'CODDEPTO',' readonly']) !!}
                            
                        </div>    

                    </div>
                </div> {{-- cierre primer row --}}


                <div class="modal-footer">

                    <input type="hidden" name="PASSWORDIN" value="{{substr(\Auth::User()->name,0,20)}}">
                    <input type="hidden" name="TIPOCLI" value="01">
                    <input type="hidden" name="ESCLIENTE" value="S">
                    <input type="hidden" name="HABILITADO" value="S">
                    <input type="hidden" name="INTCAR" value="S">
                    <input type="hidden" name="REGSIMP" value="1">
                    <input type="hidden" name="TIPOCTA" value="1">
                    <input type="hidden" name="TIPOCAR" value="1">
                    <input type="hidden" name="PLAZO" value="1">
                    <input type="hidden" name="RESPRETE" value="0">
                    <input type="hidden" name="REPORTDC" value="0">
                    <input type="hidden" name="FACELECTRO" value="1">
                    <input type="hidden" name="CIIU" value="1081">
                    <input type="hidden" name="CODIGOCTA" value="13050501">
                    <input type="hidden" name="CODIGOCTAP" value="250502">
                    <input type="hidden" name="CTANIIFPRV" value="250502">
                    <input type="hidden" name="CODCTANIIF" value="13050501">
                    <input type="hidden" name="EMAILFACELECT" value="" id="emailfacturaL">
                    <input type="hidden" name="CODALTERNO" value="" id="codalternoL">
                    <input type="hidden" name="CLASE" value="13" id="CLASE">

                    <center><button type="submit" class="btn btn-primary" >Guardar</button>
                        <button type="reset" class="btn btn-danger">Borrar</button></center><p>
                        </div>
                        {!! Form::close() !!}		
                    </div>
                </div>
            </div>

        </div>

        </div>

        <script type="text/javascript">
            
                $(document).ready(function() {

                     $(".form-control").on("keypress", function () {
                          $input=$(this);
                          setTimeout(function () {
                           $input.val($input.val().toUpperCase());
                          },50);
                         })

                    $('.nombrecompletol').change(function(event) {
                        var nombre11 = $('#NOMBRE1L').val();
                        var nombre22 = $('#NOMBRE2L').val();
                        var apellido11 = $('#APELLIDO1L').val();
                        var apellido22 = $('#APELLIDO2L').val();
                        var nombrecompletol =  apellido11 + ' ' + apellido22+ ' ' +nombre11 + ' ' + nombre22 ;
                        console.log(nombrecompletol);
                        $('#nombrel').val(nombrecompletol);

                    });

                    $('#EMAILL').change(function(event) {
                         var emailfac = $('#EMAILL').val();
                         console.log(emailfac);  
                        $('#emailfacturaL').val(emailfac);
                     });


                    $('#NITL').change(function(event) {
                         var nit = $('#NITL').val();
                         console.log(nit);  
                        $('#codalternoL').val(nit);
                     });

                    $('#PERSONANJL').change(function(event) {
                         var p = $('#PERSONANJL').val();
                         console.log(p);
                         if (p == 0) {
                            $('#CLASEL').val(31);
                         } else {
                            $('#CLASEL').val(13);

                         }

                        
                     });


                });

        </script>
