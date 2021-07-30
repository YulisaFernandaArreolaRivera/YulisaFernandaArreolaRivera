{!!Form::open(['method'=>'DELETE','route'=>['categorias.destroy',$category->id]]) !!}
<input type="submit" value="Eliminiar Categoria" class="btn btn-danger">
{!! Form::close() !!}
