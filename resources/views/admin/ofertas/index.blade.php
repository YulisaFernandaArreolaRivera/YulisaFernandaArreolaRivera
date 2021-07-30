@extends('admin.app')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-briefcase"></i>Ofertas</h1>
            <p>Gestión de ofertas</p>
        </div>
        <a href="{{ route('admin.ofertas.create') }}" class="btn btn-primary pull-right">Agregar Oferta</a>
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
                            <th> Imagen</th> 
                            <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ofertas as $oferta)
                            <tr>
                                <td>{{ $oferta->Nombre }}</td>
                                <td>{{ $oferta->Precio}}</td>
                                <td>{{ $oferta->Descripción}}</td> 
                                <td>{{ $oferta->Imagen }}</td>
                                <td class="text-center"><img src="{{asset($oferta->image_url)}}" alt="{{$oferta->image_url}}" class="img-fluid" width="120px"></td>
                                      
                                <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Second group">
                                        <a href="{{ route('admin.ofertas.edit', $oferta->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i>Editar</a>
                                        <a href="{{ route('admin.ofertas.destroy', $oferta->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Eliminar</a>
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
