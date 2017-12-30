@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')


<section  id="contenido_principal">

	

<div class="box box-primary box-gris">

     <div class="box-header">
        <h4 class="box-title">Alumnos</h4>	        
        <form   action="{{ url('buscar_usuario') }}"  method="post"  >
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
				<div class="input-group input-group-sm">
					<input type="text" class="form-control" id="dato_buscado" name="dato_buscado" required>
					<span class="input-group-btn">
					<input type="submit" class="btn btn-primary" value="buscar" >
					</span>

				</div>
						
        </form>


    </div>

<div class="box-body box-white">

    <div class="table-responsive" >

	    <table  class="table table-hover table-striped" cellspacing="0" width="100%">
				<thead>
						<tr>    <th>Código</th>
								<th>Cédula</th>
								<th>Nombre</th>
								<th>Email</th>
								<th>Fijo</th>
								<th>Celular</th>
								<th>Colegio</th>
							    <th>Acción</th>
						</tr>
				</thead>
	    <tbody>

	    @foreach($usuariosAlumnos as $alumnos)
		<tr role="row" class="odd">
			<td>{{ $alumnos->id }}</td>
			<td>{{ $alumnos->usuario }}</td>
			
			<td class="mailbox-messages mailbox-name"><a href="javascript:void(0);"  style="display:block"><img src="{{asset($alumnos->avatar)}}" class="img-circle" alt="User Image" width="30px" height="30px" />&nbsp;&nbsp;{{ $alumnos->nombres_alumnos.' '. $alumnos->apellidos_alumnos }}</a></td>
			<td>{{ $alumnos->email }}</td>
			<td>{{ $alumnos->fijo_alumnos   }}</td>
			<td>{{ $alumnos->celular_alumnos   }}</td>
			<td>{{ $alumnos->colegio_alumnos  }}</td>
			<td>
			
			<button type="button" class="btn  btn-default btn-xs" onclick="verinfo_usuario({{  $alumnos->usuario }})" ><i class="fa fa-fw fa-edit"></i></button>
			<button type="button"  class="btn  btn-danger btn-xs"  onclick="borrado_usuario({{  $alumnos->id }});"  ><i class="fa fa-fw fa-remove"></i></button>
			</td>
		</tr>
	    @endforeach



		</tbody>
		</table>

	</div>
</div>






@if(count($alumnos)==0)


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