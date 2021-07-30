@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
@foreach ($products as $product)
<div class="col-xs-12 col-sm-12 col-md-4">
<div class="card padding">
<header>
<h2 class="card-title">
<a href="{{route('productos.show', $product->id)}}">
<img src="{{asset($product->image_url)}} " width="200" height="180" class="mx-auto d-block"></header>

</a>
<a href="{{route('productos.show', $product->id)}}">
{{$product->Nombre}}
</a>

<h2>
<h4 class="card-subtitle">{{$product->Precio}}</h4>
</header>
<p class="card-text"> {{$product->Descripción}} </p>
<p class="card-text"> {{$product->Cantidad}} </p>				
</div>
</div>
@endforeach

<div class="actions text-center">
{{$products->links()}}
</div>
</div>
@endsection
				