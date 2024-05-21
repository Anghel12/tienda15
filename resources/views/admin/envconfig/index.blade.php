@extends('adminlte::page')

@section('title', 'Mensajes')

@section('content_header')
    <h1>CONFIGURACION ENV</h1>
    <a href="{{ route('admin.envconfig.create') }}" class="btn btn-primary">Agregar Variable de Entorno</a>
        {{-- alerta --}}
        @if (session('info'))
        <div class="alert alert-success">
             <strong> {{session('info')}} </strong>
        </div>
        @endif
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Configuración .env') }}</div>

                    <div class="card-body">
                        <h1>Variables de Entorno</h1>
                        <table id="usersTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Valor</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($envVariables as $key => $value)
                              {{--   @if(in_array($key, ['APP_NAME', 'MAIL_USERNAME', 'MAIL_PASSWORD', 'PAYPAL_CLIENT_ID', 'PAYPAL_SECRET']))
                                  --}}   <tr>
                                        <td>{{ $key }}</td>
                                        <td>{{ $value }}</td>
                                    </tr>
                             {{--    @endif --}}
                            @endforeach
                            
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
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
