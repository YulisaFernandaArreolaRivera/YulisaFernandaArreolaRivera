@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-sm-center">
		<div class="col-xs-12 col-sm-10 col-md-6">
			<div class="card">
				<header class="padding text-center">
					<div class="padding text-center bg-primary"></div>
					<img src="{{asset($oferta->image_url)}} " width="200" height="180" class="mx-auto d-block"></header>
				<div class="card-body">
				
					<h2 class="card-title">{{$oferta->Nombre}}</h2>
					<h4 class="card-subtitle">{{$oferta->Precio}}</h4>
				</header>
				<p class="card-text"> {{$oferta->Descripción}} </p>
				<p class="card-text"> {{$oferta->Imagen}} </p>

				<div class="card-actions">
					
					<a href="/ofertas" class="btn btn-warning">Volver al catálogo</a>
					{{--Este include debe ser colocado únicamente para realizar pruebas--}}
					{{-- @include('ofertas.delete') --}}
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection