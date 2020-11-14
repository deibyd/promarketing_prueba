@extends('templates.lista')
@section('titulo','Lista de juegos')
@section('contenido')

<div class="container-fluid registerinicio">
	<div class="row">
		<div class="col-md-6 register-left register-left1">
			<img src="http://www.idaipqroo.org.mx/wp-content/uploads/2018/06/proteccion-de-datos-personales-791x1024.png" alt=""/>
		</div>    
		<div class="col-md-6 register-left">

			<h3>Bienvenid@</h3>
			<p>Por favor llena los datos correctamente en el sistema!</p>

		</div>    
	</div>
</div>



<div class="container-fluid ">

	@if(session('datos'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		{{ session('datos')}}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	@endif

	@if(session('cancelar'))
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
		{{ session('cancelar')}}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	@endif


	<br>
	<nav class="navbar navbar-light">
		<a class="navbar-brand"><img id="icono" class="img-responsive" 
			src="https://imge.apk.tools/300/d/3/1/com.widesoft.guiatelefonica.png"></a>

			<ul class="nav flex-column text-center">
				<li class="nav-item">
					<span class="nav-link active">Bienvenido Jhonatan</span>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Cerrar sesión</a>
				</li>
			</ul>

		</nav>


		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Library</a></li>
				<li class="breadcrumb-item active" aria-current="page">Data</li>
			</ol>
		</nav>

		<br>
		<h1 class="text-center">Datos personales</h1>

		<br>
		<div class="row float-right">
			<a href="{{ route('juego.create') }}" class="btn btn-info btncolorblanco">Agregar juego</a>
		</div>
		<br>
		<table class="table-responsive table text-center">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nombres</th>
					<th scope="col">Url del juego</th>
					<th scope="col">Descripción</th>
					<th scope="col">Url de la imagen</th>
					<th scope="col">Estado del juego</th>
					<th scope="col">Fecha de creación</th>
					<th scope="col">Fecha de actualización</th>
				</tr>
			</thead>
			<tbody>
				@foreach($juego as $juegoItem)
				<tr>
					<th scope="row">{{$juegoItem->id}}</th>
					<td>{{$juegoItem->nombre}}</td>
					<td><a href="{{$juegoItem->url}}">Ir a jugar</a></td>
					<td>{{$juegoItem->descripcion}}</td>
					<td><img src="{{$juegoItem->url_imagen}}"></td>
					<td>{{$juegoItem->estado}}</td>
					<td>{{$juegoItem->created_at}}</td>
					<td>{{$juegoItem->updated_at}}</td>
					<td><a class="btn btn-success btncolorblanco">
						<i class="fa fa-edit"></i> Editar 
					</a>

					<a class="btn btn-danger btncolorblanco">
						<i class="fa fa-trash-alt"></i> Eliminar 
					</a>
				</td>


			</tr>
			@endforeach


		</tbody>
	</table>


</div>
@include('templates.footer', ['container'=>'container-fluid'])
@endsection