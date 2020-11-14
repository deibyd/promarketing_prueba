@extends('templates.lista')
@section('titulo', 'Inserta un juego')
@section('contenido')

<div class="container">
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
	</div>

	<form method="POST" action="{{ route('juego.store') }}">
		@csrf
		<div class="container register">


			<div class="row">
				<div class="col-md-3 register-left">
					<p>Nuevo registro de un juego</p>
				</div>
				<div class="col-md-9 register-right">

					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

							<h3 class="register-heading">Ingresar juego</h3>

							<div class="row register-form">

								<div class="col-md-6">                                        

									<div class="form-group">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text"><i class="fa fa-user text-info"></i></div>
											</div>
											<input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" required="">
										</div>
									</div>

									<div class="form-group">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text"><i class="fa fa-user-edit text-info"></i></div>
											</div>
											<input type="text" class="form-control" id="url" name="url" placeholder="url del juego" required="">
										</div>
									</div>

									<div class="form-group">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text"><i class="fa fa-user-edit text-info"></i></div>
											</div>
											<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="descripción" required="">
										</div>
									</div>


									<div class="form-group">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text"><i class="fa fa-user-edit text-info"></i></div>
											</div>
											<input type="text" class="form-control" id="url_imagen" name="url_imagen" placeholder="url de la imagen" required="">
										</div>
									</div>
								</div>
								<div class="col-md-6">




									<div class="form-group">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text"><i class="fa fa-map-marker-alt text-info"></i></div>
											</div>
											<select name="estado" class="form-control">
												<option class="hidden" selected disabled>Estado</option>
												<option>Working</option>
												<option>Not working</option>
												<option>Failed</option>
											</select>
										</div>
									</div>

									<button type="submit" class="redondo btn btn-info"><i class="fas fa-save"></i> Guardar</button>
									<a href="{{ route('cancelar') }}" class="redondo btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
	</form>

	@include('templates.footer', ['container'=>'container'])
	@endsection