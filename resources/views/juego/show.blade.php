@extends('templates.lista')
@section('titulo', 'Información del juego')
@section('contenido')

<div class="container">
	<h1>Información de {{ $juego->nombre }}</h1>
	<ul class="list-group list-group-flush">
		<li class="list-group-item">
			<div class="col-2"><span class="font-weight-bold">Nombre: </span></div>
			<div class="col-10">{{ $juego->nombre }}</div>
		</li>

		<li class="list-group-item">
			<div class="col-2"><span class="font-weight-bold">Acceso: </span></div>
			<div class="col-10"><a href="{{ $juego->url }}">Ir al juego</a></div>
		</li>
		<li class="list-group-item">
			<div class="col-2"><span class="font-weight-bold">Descripción: </span></div>
			<div class="col-10">{{ $juego->descripcion }}</div>
		</li>
		<li class="list-group-item">
			<div class="col-2"><span class="font-weight-bold">Imagen: </span></div>
			<div class="col-10"><img src="{{ $juego->url_imagen }}"></div>
		</li>
		<li class="list-group-item">
			<div class="col-2"><span class="font-weight-bold">Estado: </span></div>
			<div class="col-10">{{ $juego->estado }}</div>
		</li>
		<li class="list-group-item">
			<div class="col-2"><span class="font-weight-bold">Creado: </span></div>
			<div class="col-10">{{ $juego->created_at->format('M d Y H:s:i') }}</div>
		</li>
		<li class="list-group-item">
			<div class="col-2"><span class="font-weight-bold">Actualizado: </span></div>
			<div class="col-10">{{ $juego->updated_at->format('M d Y H:s:i') }}</div>
		</li>
	</ul>

	<a href="{{ route('juego.edit', $juego->id) }}" class="redondo btn btn-success btncolorblanco">
		<i class="fa fa-edit"></i> Editar 
	</a>
	<a href="{{ route('cancelar') }}" class="redondo btn btn-danger">
		<i class="fas fa-ban"></i> Cancelar
	</a>
</div>
@include('templates.footer', ['container'=>'container'])
@endsection