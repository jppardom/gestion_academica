@extends('layouts.Registro')

@section('content_register')

<section class="content" >

  <div class="col-md-12">

    <div class="box box-primary  box-gris">
 
      <div class="box-header with-border my-box-header">
        <h3 class="box-title"><strong>NUEVO USUARIO</strong></h3>
      </div><!-- /.box-header -->
     
              @if (count($errors) > 0)
                 <div class="col-sm-12" >
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Error de Registro
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                </div>
      @endif
         <div class="box-body">
              
          <form   role="form" action="{{ url('/register') }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 

            <div class="col-md-6">
                <div class="form-group">
                  <label class="col-sm-2" for="avatar">Imagen Usuario*</label>
                  <input type="file"  name="file" id="files" accept="image/*.">
                  <link rel="stylesheet" href="{{asset('/css/foto.css')}}">
                  <output with-border="100px" id="list"></output>
                  <script src="{{asset('/js/foto.js')}}"></script>
                </div><!-- /.form-group -->
              </div><!-- /.col -->
              <div class="box-header with-border my-box-header col-md-12" style="margin-bottom:10px;margin-top: 10px;">
                  <h3 class="box-title"><strong>DATOS PERSONALES</strong></h3>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-sm-2" for="identificacion">Identificación</label>
                  <div class="col-sm-10" >
                    <select name="identificacion" onchange= "crearlink(this.form)" class="form-control" required>
                      <option selected> [Seleccione]</option>
                      <option value="cedula">Cédula</option>
                    </select>
                  </div>
                </div><!-- /.form-group -->

              </div><!-- /.col -->

              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-sm-2" for="usuario">Identificación*</label>
                  <div class="col-sm-10" >
                    <input type="text" class="form-control" id="usuario" name="usuario" value="{{ old('usuario') }}" required   >
                  </div>
                </div><!-- /.form-group -->
              </div><!-- /.col -->

                
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-sm-2" for="nombres_alumnos">Nombres*</label>
                  <div class="col-sm-10" >
                    <input type="text" class="form-control" id="nombres_alumnos" name="nombres_alumnos" value="{{ old('nombres_alumnos') }}" required  >
                  </div>
                </div><!-- /.form-group -->
               </div><!-- /.col -->

              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-sm-2" for="apellidos_alumnos">Apellidos*</label>
                  <div class="col-sm-10" >
                    <input type="text" class="form-control" id="apellidos_alumnos" name="apellidos_alumnos" value="{{ old('apellidos_alumnos') }}" required >
                  </div>
                </div><!-- /.form-group -->
              </div><!-- /.col -->


              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-sm-2" for="fnacimiento_alumnos">Fecha de Nacimiento*</label>
                  <div class="col-sm-10" >
                    <input type="text"  class="form-control datepicker"  id="fnacimiento_alumnos" name= "fnacimiento_alumnos" value="{{ old('fnacimiento_alumnos') }}" required >
                  </div>
                </div><!-- /.form-group -->
              </div><!-- /.col -->

              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-sm-2" for="sexo_alumnos">Sexo*</label> 
                    <div class="col-sm-10" >
                      <select name="sexo_alumnos" onchange="crearlink(this.form)" class="form-control" value="{{ old('sexo_alumnos') }}" required>
                        <option selected> [Seleccione]</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                      </select>
                    </div>
                </div><!-- /.form-group -->
              </div><!-- /.col -->


              <div class="box-header with-border my-box-header col-md-12" style="margin-bottom:10px;margin-top: 10px;">
                  <h3 class="box-title"><strong>DATOS DE UBICACIÓN</strong></h3>
              </div>
       

              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-sm-2" for="provincia_alumnos">Provincia*</label>
                  <div class="col-sm-10" >
                    <input type="text" class="form-control" id="provincia_alumnos" name="provincia_alumnos" value="{{ old('provincia_alumnos') }}" required >
                  </div>
                </div><!-- /.form-group -->
              </div><!-- /.col -->

              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-sm-2" for="canton_alumnos">Canton*</label>
                  <div class="col-sm-10" >
                    <input type="text" class="form-control" id="canton_alumnos" name="canton_alumnos" value="{{ old('canton_alumnos') }}" required >
                  </div>
                </div><!-- /.form-group -->
              </div><!-- /.col -->

              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-sm-2" for="ciudad_alumnos">Ciudad*</label>
                  <div class="col-sm-10" >
                    <input type="text" class="form-control" id="ciudad_alumnos" name="ciudad_alumnos" value="{{ old('ciudad_alumnos') }}"  required >
                  </div>
                </div><!-- /.form-group -->
              </div><!-- /.col -->


              <div class="col-md-6">
                <div class="form-group">
                <label class="col-sm-2" for="direccion_alumnos">Dirección*</label>
                  <div class="col-sm-10" >
                    <input type="text" class="form-control" id="direccion_alumnos" name="direccion_alumnos" value="{{ old('direccion_alumnos') }}" required >
                  </div>
                </div><!-- /.form-group -->
              </div><!-- /.col -->

              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-sm-2" for="referencias_alumnos">Referencia*</label>
                  <div class="col-sm-10" >
                    <input type="text" class="form-control" id="referencias_alumnos" name="referencias_alumnos" value="{{ old('referencias_alumnos') }}" required >
                  </div>
                </div><!-- /.form-group -->
              </div><!-- /.col -->



              <div class="box-header with-border my-box-header col-md-12" style="margin-bottom:15px;margin-top: 15px;">
                <h3 class="box-title"><strong>TELEFONOS</strong></h3>
              </div>
       

              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-sm-2" for="celular_alumnos">Celular</label>
                  <div class="col-sm-10" >
                    <input type="text" class="form-control" id="celular_alumnos" name="celular_alumnos" value="{{ old('celular_alumnos') }}" >
                  </div>
                </div><!-- /.form-group -->
              </div><!-- /.col -->

              <div class="col-md-6">
               <div class="form-group">
                <label class="col-sm-2" for="fijo_alumnos">Fijo</label>
                <div class="col-sm-10" >
                  <input type="text" class="form-control" id="fijo_alumnos" name="fijo_alumnos" value="{{ old('fijo_alumnos') }}">
                </div>
               </div><!-- /.form-group -->
              </div>

              <div class="box-header with-border my-box-header col-md-12" style="margin-bottom:15px;margin-top: 15px;">
                <h3 class="box-title"><strong>CORREO ELETRONICO</strong></h3>
              </div>
       

              <div class="col-md-6">
                <div class="form-group">
                <label class="col-sm-2" for="email">Principal*</label>
                  <div class="col-sm-10" >
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required >
                  </div>
                </div><!-- /.form-group -->
              </div><!-- /.col -->

              <div class="col-md-6">
               <div class="form-group">
                 <label class="col-sm-2" for="email_alumnos">Alternativo</label>
                 <div class="col-sm-10" >
                   <input type="email" class="form-control" id="email_alumnos" name="email_alumnos" value="{{ old('email_alumnos') }}">
                  </div>
               </div><!-- /.form-group -->
              </div>

              <div class="box-header with-border my-box-header col-md-12" style="margin-bottom:15px;margin-top: 15px;">
                <h3 class="box-title"><strong>DATOS ADICIONALES</strong></h3>
              </div>
       

              <div class="col-md-6">
                <div class="form-group">
                <label class="col-sm-2" for="colegio_alumnos">Colegio Proveniente*</label>
                  <div class="col-sm-10" >
                    <input type="text" class="form-control" id="colegio_alumnos" name="colegio_alumnos" value="{{ old('colegio_alumnos') }}"  required >
                  </div>
                </div><!-- /.form-group -->
              </div><!-- /.col -->

              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-sm-2" for="tipo_sangre_alumnos">Tipo de sangre*</label>
                  <div class="col-sm-10" >
                    <input type="text" class="form-control" id="tipo_sangre_alumnos" name="tipo_sangre_alumnos" value="{{ old('tipo_sangre_alumnos') }}">
                  </div>
                </div><!-- /.form-group -->
              </div>


              

              <div class="box-footer col-xs-12 box-gris ">
                <button type="submit" class="btn btn-primary">Crear Nuevo Usuario</button>
              </div>
          </form>                 
        </div>               
     </div>                   
    </div>
    <script>
    $('.datepicker').datepicker({
        format: "dd/mm/yyyy",
        language: "es",
        autoclose: true
    });
</script>
</section>
@endsection



