@extends('adminlte::page')

@section('title', 'Calculadora')

@section('content_header')
    <h1>Calculadora</h1>
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Calculadora') }}</div>

                <div class="card-body">
                    <table id="usersTable" class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{ __('Número 1') }}</th>
                                <th scope="col">{{ __('Número 2') }}</th>
                                <th scope="col">{{ __('Operación') }}</th>
                                <th scope="col">{{ __('Resultado') }}</th>
                                <th scope="col">{{ __('Tipo de operación') }}</th>
                                <th scope="col">{{ __('Completada') }}</th>
                    {{--             <th scope="col">{{ __('Usuario') }}</th> --}}
                   {{--              <th scope="col">{{ __('Descripción') }}</th> --}}
                                <th scope="col">{{ __('Fecha de operación') }}</th>
                                <th scope="col">{{ __('Unidad de medida') }}</th>
                              {{--   <th scope="col">{{ __('Ubicación') }}</th> --}}
                           {{--      <th scope="col">{{ __('Resultado en texto') }}</th> --}}
                                <th scope="col">{{ __('Acciones') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($calculadoras as $calculadora)
                                <tr>
                                    <th scope="row">{{ $calculadora->id }}</th>
                                    <td>{{ $calculadora->numero1 }}</td>
                                    <td>{{ $calculadora->numero2 }}</td>
                                    <td>{{ $calculadora->operacion }}</td>
                                    <td>{{ $calculadora->resultado }}</td>
                                    <td>{{ $calculadora->tipo_operacion }}</td>
                                    <td>{{ $calculadora->completa ? 'Sí' : 'No' }}</td>
                                {{--     <td>{{ $calculadora->user_id }}</td> --}}
                               {{--      <td>{{ $calculadora->descripcion }}</td> --}}
                                    <td>{{ $calculadora->fecha_operacion }}</td>
                                    <td>{{ $calculadora->unidad_medida }}</td>
                                 {{--    <td>{{ $calculadora->ubicacion }}</td> --}}
                             {{--        <td>{{ $calculadora->resultado_texto }}</td> --}}
                                    <td>
                                        <a href="{{ route('calculadoras.show', $calculadora) }}" class="btn btn-sm btn-primary">{{ __('Ver') }}</a>
                                        <a href="{{ route('calculadoras.edit', $calculadora) }}" class="btn btn-sm btn-secondary">{{ __('Editar') }}</a>
                                        <form action="{{ route('calculadoras.destroy', $calculadora) }}" method="POST" class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">{{ __('Eliminar') }}</button>
                                        </form>
                                    </td>
                                </tr>
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
