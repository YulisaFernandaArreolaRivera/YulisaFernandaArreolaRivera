@extends('admin.app')
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-briefcase"></i>Productos</h1>
            <p>Gestión de productos</p>
        </div>
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary pull-right">Agregar Producto</a>
    </div>
    
    <div class="row">
    
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th> Nombre </th>
                            <th> Precio </th>
                            <th> Descripción </th>
                            <th> Cantidad </th>
                            <th> Imagen</th> 
                            <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->Nombre }}</td>
                                <td>{{ $product->Precio}}</td>
                                <td>{{ $product->Descripción}}</td>
                                <td>{{ $product->Cantidad }}</td>
                                <td>{{ $product->Imagen }}</td>
                                <td class="text-center"><img src="{{asset($product->image_url)}}" alt="{{$product->image_url}}" class="img-fluid" width="120px"></td>
                                <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Second group">
                                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i>Editar</a>
                                        <a href="{{ route('admin.products.destroy', $product->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Eliminar</a>
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
