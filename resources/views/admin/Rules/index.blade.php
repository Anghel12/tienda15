@extends('adminlte::page')

@section('title', 'Rules')

@section('content_header')
    <h1>Rules</h1>
    @if (session('info'))
    <div class="alert alert-success">
        <strong> {{session('info')}} </strong>
    </div>
    @endif
@stop

@section('content')

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Slug</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($rules as $rule)
        <tr>
            <td>{{ $rule->name }}</td>
            <td>{{ $rule->slug }}</td>
            <td>{{ $rule->description ?? '-' }}</td>
            <td>
                <a href="{{ route('admin.rules.show', $rule->id) }}">Ver</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


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