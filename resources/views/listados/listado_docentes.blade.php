@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')


<section  id="contenido_principal">

	

<div class="box box-primary box-gris">

     <div class="box-header">
        <h4 class="box-title">Docentes</h4>	        
        <form   action="{{ url('buscar_usuario') }}"  method="post"  >
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
				<div class="input-group input-group-sm">
					<input type="text" class="form-control" id="dato_buscado" name="dato_buscado" required>
					<span class="input-group-btn">
					<input type="submit" class="btn btn-primary" value="buscar" >
					</span>

				</div>
						
        </form>


		<div class="margin" id="botones_control">
			<script src="{{ asset('/js/plusis.js') }}" type="text/javascript"></script>
              <a href="javascript:void(0);" class="btn btn-xs btn-primary" onclick="cargar_formulario(1);">Agregar Docentes</a>
              <a href="{{ url("/listado_docentes") }}"  class="btn btn-xs btn-primary" >Listado Docentes</a> 
              <a href="javascript:void(0);" class="btn btn-xs btn-primary" onclick="cargar_formulario(2);">Roles</a> 
              <a href="javascript:void(0);" class="btn btn-xs btn-primary" onclick="cargar_formulario(3);" >Permisos</a>                                 
		</div>

    </div>

<div class="box-body box-white">

    <div class="table-responsive" >

	    <table  class="table table-hover table-striped" cellspacing="0" width="100%">
				<thead>
						<tr>    <th>Código</th>
								<th>Cédula</th>
								<th>Rol</th>
								<th>Nombre</th>
								<th>Email</th>
								<th>Fijo</th>
								<th>Celular</th>
								<th>Títuto</th>
								<th>Especialidad</th>
							    <th>Acción</th>
						</tr>
				</thead>
	    <tbody>

	    @foreach($usuarios as $usuarios)
		<tr role="row" class="odd">
			<td>{{ $usuarios->id }}</td>
			<td>{{ $usuarios->usuario }}</td>
			<td><span class="label label-default">
             <!-- roles    -->
			 @foreach($roles as $roles)
			 	@if($usuarios->id == $roles->user_id)
			 		{{  $roles->slug.","  }}
			 	@endif
             @endforeach 

             -</span>
			</td>
			<td class="mailbox-messages mailbox-name"><a href="javascript:void(0);"  style="display:block"><img src="{{asset($usuarios->avatar)}}" class="img-circle" alt="User Image" width="30px" height="30px" />&nbsp;&nbsp;{{ $usuarios->nombres_docentes.' '. $usuarios->apellido_docentes }}</a></td>
			<td>{{ $usuarios->email }}</td>
			<td>{{ $usuarios->fijo_docentes  }}</td>
			<td>{{ $usuarios->celular_docentes  }}</td>
			<td>{{ $usuarios->titulo_docentes  }}</td>
			<td>{{ $usuarios->especialidad_docentes }}</td>
			<td>
			
			<button type="button" class="btn  btn-default btn-xs" onclick="verinfo_usuario({{  $usuarios->id }})" ><i class="fa fa-fw fa-edit"></i></button>
			<button type="button"  class="btn  btn-danger btn-xs"  onclick="borrado_usuario({{  $usuarios->id }});"  ><i class="fa fa-fw fa-remove"></i></button>
			</td>
		</tr>
	    @endforeach



		</tbody>
		</table>

	</div>
</div>






@if(count($usuarios)==0)


<div class="box box-primary col-xs-12">

<div class='aprobado' style="margin-top:70px; text-align: center">
 
<label style='color:#177F6B'>
              ... no se encontraron resultados para su busqueda...
</label> 

</div>

 </div> 


@endif

</div></section>
@endsection