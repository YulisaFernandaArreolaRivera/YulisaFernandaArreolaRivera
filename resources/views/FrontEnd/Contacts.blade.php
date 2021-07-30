@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
        <body style="background-color:#FRDP12;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
  
        </li>
    
        </div>
          </nav>
  </nav> 
  <br/> 
  
<center><b>
<br><br><font face="Comic Sans MS,arial,verdana" font size=8 font color="#CD480E">CONTACTOS</font></b><br></br> </center>
            <dl></dl>

            @foreach ($contacts as $contact)
           
                <div class="container">
                    <div class="card">
                    <br><font face="Comic Sans MS,arial,verdana" font size=4 font color="#FF3333"> NOMBRE: </font>{{ $contact->Nombre }}</br> 
                        
    <br><font face="Comic Sans MS,arial,verdana" font size=4 font color="#CC0099">CORREO: </font> {{ $contact->Correo }}</br> 
   <br><font face="Comic Sans MS,arial,verdana" font size=4 font color="#0033FF">DIRECCIÓN: </font><h4> {{ $contact->Dirección}}</br>  
   <br><font face="Comic Sans MS,arial,verdana" font size=4 font color="#009900">TELÉFONO: </font><h4> {{ $contact->Teléfono }}</br> 
                    </div>
                    
                    <dl></dl>
                    </center> 
                </div>
            @endforeach
            </div>
            </>
       
    </div>
@endsection




