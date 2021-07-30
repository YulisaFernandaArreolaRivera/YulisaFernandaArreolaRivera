{!!Form::open(['route'=>[$product->url(),$product->id],'method'=>$product->method(),'files'=>true, 'class'=>'app-form']) !!} 
@csrf

<div>
    {!! Form::label('Nombre', 'Nombre') !!}
    {!! Form::text('Nombre', $product->Nombre, ['class'=>'form-control']) !!}
</div>
<div>
    {!! Form::label('Precio', 'Precio') !!}
    {!! Form::textarea('Precio', $product->Precio, ['class'=>'form-control']) !!}
</div>
<div>
    {!! Form::label('Descripción', 'Descripción') !!}
    {!! Form::text('Descripción', $product->Descripción, ['class'=>'form-control']) !!}
</div>
<div>
    {!! Form::label('Cantidad', 'Cantidad') !!}
    {!! Form::text('Cantidad', $product->Cantidad, ['class'=>'form-control']) !!}
</div>
<div>
    {!! Form::label('category_id', 'Categoria del producto') !!}
    {!! Form::select('category_id', $categories, old('category_id'), ['class' => 'form-control', 'required']) !!}
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
