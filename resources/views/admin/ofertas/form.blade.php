{!!Form::open(['route'=>[$oferta->url(),$oferta->id],'method'=>$oferta->method(),'files'=>true, 'class'=>'app-form']) !!} 
@csrf

<div>
    {!! Form::label('Nombre', 'Nombre') !!}
    {!! Form::text('Nombre', $oferta->Nombre, ['class'=>'form-control']) !!}
</div>
<div>
    {!! Form::label('Precio', 'Precio') !!}
    {!! Form::textarea('Precio', $oferta->Precio, ['class'=>'form-control']) !!}
</div>
<div>
    {!! Form::label('Descripción', 'Descripción') !!}
    {!! Form::text('Descripción', $oferta->Descripción, ['class'=>'form-control']) !!}
</div>
<div>
    <dl></dl>
    {!! Form::file('image_url', ['multiple'=>true]) !!}
    <dl></dl>
</div>

<div class="">
    <input type="submit" value="Guardar" class="btn btn-primary">
</div>
{!! Form::close()!!}
