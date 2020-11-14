@extends('templates.lista')

@section('titulo', 'Confirmación')

@section('contenido')
<div class='container py-5'>
	<h1>¿Deseas eliminar el registro de {{ $juego->nombre}}?</h1>
	<form method="post" action="{{ route('juego.destroy', $juego->id) }}">
		@method('DELETE')
		@csrf
		<button type="submit" class="redondo btn btn-danger">
			<i class="fas fa-trash-alt"></i> Eliminar
		</button>
		<a class="redondo btn btn-secondary" href="{{ route('cancelar') }}"><i class="fas fa-ban"></i> Cancelar</a>
	</form>
</div>
@include('templates.footer', ['container'=>'container'])
@endsection

{{ $juego }}

