<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
    <li class="navbar-item dropdown">
    <a class="navbar-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Categorias </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">  
    
    @foreach ($categoria as $cat)
    <a class="dropdown-item">
    <a class="dropdown-item" href="{{route('productos.categoria', $cat->id)}}">{{$cat->Nombre}} </a>
    </a>
    @endforeach
    </div>
    </li>
    </ul>
    </div>