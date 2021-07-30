@extends('layouts.app')

@section('content')

<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">

      </li>

      </div>
        </nav>
	<ofertas-component> </ofertas-component>

</div>	
	<div class="actions text-center">
		{{$ofertas->links()}}
	</div>
</div>
@endsection
