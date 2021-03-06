@extends('templates.lista')
@section('titulo', 'Inserta un juego')
@section('contenido')

<div class="container">
	<form method="POST" action="{{ route('juego.store') }}">
		@csrf
		<div class="row">
			<div class="col-md-12">
				<h1>Ingresar juego</h1>                               
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" class="form-control" id="nombre" name="nombre" required="">
				</div>

				<div class="form-group">
					<label for="url">URL</label>
					<input type="text" class="form-control" id="url" name="url" required="">
				</div>

				<div class="form-group">
					<label for="descripcion">Descripción</label>
					<textarea type="text" class="form-control" id="descripcion" name="descripcion" required=""></textarea>
				</div>


				<div class="form-group">
					<label for="url_imagen">URL de la imagen</label>
					<input type="text" class="form-control" id="url_imagen" name="url_imagen" required="">
				</div>

				<div class="form-group">
					<label for="estado">Estado</label>
					<select name="estado" class="form-control" id="estado">
						<option class="hidden" selected disabled>Seleccione</option>
						<option>Working</option>
						<option>Not working</option>
						<option>Failed</option>
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