@extends('templates.lista')
@section('titulo','Lista de juegos')
@section('contenido')

<div class="container ">

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

	<div class="row">
		<div class="col-md-12">
			<div class="item-left"><h1>Lista de juegos</h1></div>
			<div class="item-right">
				<a href="{{ route('juego.create') }}" class="btn btn-info btncolorblanco">Agregar juego</a>
			</div>
		</div>
	</div>

	<div class="row">
		<table class="table table-responsive table-hover text-center">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nombres</th>
					<th scope="col">Url</th>
					<th scope="col"></th>
					<th scope="col">Estado</th>
					<th scope="col">Fecha de creación</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($juego as $juegoItem)
				<tr>
					<th scope="row">{{$juegoItem->id}}</th>
					<td><a href="{{ route('juego.show', $juegoItem->id) }}">{{$juegoItem->nombre}}</a></td>
					<td><a href="{{$juegoItem->url}}">Ir a jugar</a></td>
					<td><img src="{{$juegoItem->url_imagen}}"></td>
					<td>{{$juegoItem->estado}}</td>
					<td>{{$juegoItem->created_at->format('M d Y')}}</td>
					<td class="text-left"><a href="{{ route('juego.edit', $juegoItem->id) }}">
						<i class="fa fa-edit text-success"></i> Editar 
					</a>
					<br>
					<a href="{{ route('juego.confirm', $juegoItem->id) }}">
						<i class="fa fa-trash-alt text-danger"></i> Eliminar 
					</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
{{ $juego->links() }}
</div>
@include('templates.footer', ['container'=>'container-fluid'])
@endsection