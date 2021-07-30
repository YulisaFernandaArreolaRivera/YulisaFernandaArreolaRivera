{!!Form::open(['route'=>[$category->url(),$category->id],'method'=>$category->method(),'class'=>'app-form']) !!}
@csrf
<div>
 {!! Form::label('Nombre', 'Nombre') !!}
 {!! Form::text('Nombre', $category->Nombre, ['class'=>'form-control']) !!}
</div>
<div>
 {!! Form::label('Cantidad', 'Cantidad') !!}
 {!! Form::text('Cantidad', $category->Cantidad, ['class'=>'form-control']) !!}
</div>
<div>
 {!! Form::label('Genero', ' Genero') !!}
 {!! Form::text(' Genero', $category-> Genero, ['class'=>'form-control']) !!}
</div>
<div>
 {!! Form::label('Color', ' Color') !!}
 {!! Form::text(' Color', $category->Color, ['class'=>'form-control']) !!}
</div>

<div class="">
 <input type="submit" value="Guardar" class="btn btn-primary">
</div>
{!! Form::close()!!}