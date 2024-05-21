@extends('adminlte::page')

@section('title', 'Mensajes')

@section('content_header')
    <h1>Icons</h1>
{{--     <a href="{{ route('admin.envconfig.create') }}" class="btn btn-primary">Agregar Variable de Entorno</a>
       --}}  {{-- alerta --}}
        @if (session('info'))
        <div class="alert alert-success">
             <strong> {{session('info')}} </strong>
        </div>
        @endif
@stop

@section('content')


@include('admin.icons.partials.iconos') 

{{--     <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4">
        @foreach ($icons as $icon)
            <div class="col mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <svg class="bi" width="32" height="32" fill="currentColor">
                            <use xlink:href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.svg') }}#{{ $icon }}" />
                        </svg>
                        <h5 class="card-title">{{ $icon }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div> --}}
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#usersTable').DataTable();
        });
    </script>
@stop
