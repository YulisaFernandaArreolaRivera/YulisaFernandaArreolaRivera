{!!Form::open(['route'=>[$contact->url(),$contact->id],'method'=>$contact->method(),'class'=>'app-form']) !!} 
@csrf
<div>
    {!! Form::label('Nombre', 'Nombre') !!}
    {!! Form::text('Nombre', $contact->Nombre, ['class'=>'form-control']) !!}
</div>
<div>
 {!! Form::label('Correo', 'Correo') !!}
 {!! Form::text('Correo', $contact->Correo, ['class'=>'formcontrol']) !!}
</div>
<div>
 {!! Form::label('Dirección', ' Dirección') !!}
 {!! Form::text(' Dirección', $contact-> Dirección, ['class'=>'form-control']) !!}
</div>
<div>
 {!! Form::label('Teléfono', 'Teléfono') !!}
 {!! Form::number('Teléfono', $contact->Teléfono, ['class'=>'formcontrol']) !!}
</div>

<div class="">
    <input type="submit" value="Guardar" class="btn btn-primary">
</div>
{!! Form::close()!!}
