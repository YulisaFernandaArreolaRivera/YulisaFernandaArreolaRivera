@extends('admin.app')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-briefcase"></i>Contactos</h1>
            <p>Gestión de contactos</p>
        </div>
        {{-- <a href="{{ route('admin.contacts.create') }}" class="btn btn-primary pull-right">Editar contacto</a> --}}
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="title">
                <div class="title-body">
                    <div class="card padding">
                        <header>
                            <h4>Editar contacto existente</h4>
                        </header> 
                                                
                        <div class="card-body">
                            @include('admin.contacts.form')
                        </div>
                    </div>                                                
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
