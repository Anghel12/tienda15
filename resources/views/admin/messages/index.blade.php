@extends('adminlte::page')

@section('title', 'Mensajes')

@section('content_header')
    <h1>Mensajes</h1>

        {{-- alerta --}}
        @if (session('info'))
        <div class="alert alert-success">
             <strong> {{session('info')}} </strong>
        </div>
        @endif
@stop

@section('content')

@include('admin.messages.partials.enviar_selecionar') 



    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="GET" action="{{ route('admin.messages.create') }}">
                        <button type="submit" class="btn btn-primary mb-3">Enviar mensaje a usuario</button>
                    </form>
                    <form method="GET" action="{{ route('admin.messages.create', 'all') }}">
                        <button type="submit" class="btn btn-primary mb-3">Enviar mensaje a todos los usuarios</button>
                    </form>
                    <table id="usersTable" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Correo electrónico</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>  
                                        <a href="{{ route('admin.users.show', $user) }}">         
                                         <div class="shrink-0 mr-3">
                                     
                                            <img class="h-10 w-10 rounded-full object-cover" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" style="border-radius: 50%; width: 50px; height: 50x;"/>
                                         </div>
                                        </a> 
                                        {{$user->id }}   
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <form method="GET" action="{{ route('admin.messages.create', $user->id) }}">
                                            <button type="submit" class="btn btn-primary">Enviar mensaje</button>
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
@stop

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
