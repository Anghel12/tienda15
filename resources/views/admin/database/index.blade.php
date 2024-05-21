@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>REFERIDOS OK</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Tabla</th>
                        <th>Columnas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tablas as $tabla)
                    <tr>
                        <td>{{ $tabla }}</td>
                        <td>
                            <ul class="list-unstyled">
                                @foreach (Schema::getColumnListing($tabla) as $columna)
                                <li>{{ $columna }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
                
        </div>
    </div>
</div>

@stop

@section('css')
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}


<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/css/admin_custom.css"> 
@stop

@section('js')

    <script> console.log('Hi!'); </script>
   {{--  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> --}}
  
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

    <script>


    $('#myTable').DataTable({
        responsive: true,
        autoWitdth: false
    });

        </script>
@stop