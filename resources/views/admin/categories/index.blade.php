
@extends('admin.app')
@section('content')
 <div class="app-title">
 <div>
 <h1><i class="fa fa-briefcase"></i>Categorías</h1>
 <p>Gestión de categorías</p>
 </div>
 <a href="{{ route('admin.categories.create') }}" class="btn btnprimary pull-right">Agregar categorias</a>
 </div>

 <div class="row">
 <div class="col-md-12">
 <div class="tile">
 <div class="tile-body">
 <table class="table table-hover tablebordered" id="sampleTable">
 <thead>
<tr>

 <th>Nombre</th>
 <th>Cantidad</th>
 <th>Genero</th>
 <th>Color</th>
 
 <th style="width:100px; minwidth:100px;" class="text-center text-danger"><i class="fa fabolt"> </i></th>
 </tr>
</thead>
 <tbody>
@foreach($categories as $category)
 <tr>
 
 <td>{{ $category->Nombre }}</td>
 <td>{{ $category->Cantidad }}</td>
 <td>{{ $category->Genero }}</td>
 <td>{{ $category->Color }}</td>

 <td class="text-center">
 <div class="btngroup" role="group" aria-label="Second group">
 <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-sm btn-primary"><i class="fa faedit"></i>Editar</a> 
 <a href="{{ route('admin.categories.destroy', $category->id) }}" class="btn btn-sm btn-danger"><i class="fa fatrash"></i>Eliminar</a>
 </div>
 </td>
 </tr>
 @endforeach
</tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
@endsection
@push('scripts')
 <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
 <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
 <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush




