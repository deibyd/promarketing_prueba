@extends('templates.lista')
@section('titulo', 'Editar un juego')
@section('contenido')

<div class="container">
	<form method="POST" action="{{ route('juego.update', $juego->id) }}">
		@method('PUT')
		@csrf
		<div class="row">
			<div class="col-md-12">
				<h1>Editar juego</h1>                               
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" class="form-control" id="nombre" name="nombre" required="" value="{{ $juego->nombre }}">
				</div>

				<div class="form-group">
					<label for="url">URL</label>
					<input type="text" class="form-control" id="url" name="url" required="" value="{{ $juego->url }}">
				</div>

				<div class="form-group">
					<label for="descripcion">Descripción</label>
					<textarea type="text" class="form-control" id="descripcion" name="descripcion" required="">{{ $juego->descripcion }}</textarea>
				</div>


				<div class="form-group">
					<label for="url_imagen">URL de la imagen</label>
					<input type="text" class="form-control" id="url_imagen" name="url_imagen" required="" value="{{ $juego->url_imagen }}">
				</div>

				<div class="form-group">
					<label for="estado">Estado</label>
					@php ($estado=['Working', 'Not working', 'Failed'])
					<select name="estado" class="form-control">
						<option class="hidden" selected disabled>Seleccione</option>
						@foreach($estado as $estadoItem)
						<option
						@if($juego->estado==$estadoItem)
						selected
						@endif
						>{{ $estadoItem }}</option>
						@endforeach
					</select>
				</div>

				<button type="submit" class="redondo btn btn-info"><i class="fas fa-save"></i> Guardar</button>
				<a href="{{ route('cancelar') }}" class="redondo btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a>


			</div>
		</div>
	</form>
</div>




@include('templates.footer', ['container'=>'container'])
@endsection