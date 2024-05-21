@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>REFERIDOS OK</h1>
@stop

@section('content')


<div class="card-minimalista p-2">
    <div class="card-header">Referral Link</div>
    <div class="card-body">
        <p>Use the following link to refer new users:</p>
        <input type="text" class="form-control" value="{{ $referralLink }}" readonly>
    </div>
</div>

<div class="card-minimalista">
    <div class="card-body">
        <div class="table-responsive">
            <table id='myTable' class="table table-bordered ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Usuario ID</th>
                            <th>Código de referencia</th>
                            <th>Usuario referido</th>
                            <th>referrinf</th>
                            <th>Puntos</th>
                            <th>Estado</th>
                            <th>Fecha de registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($referrals as $referral)
                        <tr>
                            <td>{{ $referral->id }}</td>
                            <td>{{ $referral->user_id }}</td>
                            <td>{{ $referral->referral_code }}</td>
                            <td>{{ $referral->referredUser->id ?? null }}</td>
                            <td>{{ $referral->referring_user_id ?? null }}</td>
                            <td>{{ $referral->points }}</td>
                            <td>{{ $referral->status }}</td>
                            <td>{{ $referral->created_at->diffForHumans() }}</td>
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


    <!-- table css -->
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
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