@extends('adminlte::page')

@section('title', 'Mensajes')

@section('content_header')
    <h1>DEV TOOLS</h1>
   {{-- alerta --}}
        @if (session('info'))
        <div class="alert alert-success">
             <strong> {{session('info')}} </strong>
        </div>
        @endif

        <td>
            <a href="{{ route('admin.DevTools.create') }}">Create</a>
        </td>
@stop

@section('content')

<div class="card">
<div class="container">
    <div class="">
        
            <table class="table table-striped" id="Table">
                <thead>
                    <tr>
                        <th>Model</th>
                        <th>Uses CRUD</th>
                        <th>Has Controller</th>
                        <th>Has Admin/Controller</th>
                        <th>Has Factory</th>
                        <th>Has Seeder</th>
                        <th>Date Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($models as $model)
                        <tr>
                            <td>App/Models/{{ basename($model, '.php') }}</td>
                            
                            <td>{{ isset($controllers[$model.'Controller']) ? 'Yes' : 'No' }}</td>
                            <td>{{ file_exists(app_path('Http/Controllers/' . basename($model, '.php') . 'Controller.php')) ? 'Yes' : 'No' }}</td>
                            <td>{{ file_exists(app_path('Http/Controllers/Admin/' . basename($model, '.php') . 'Controller.php')) ? 'Yes' : 'No' }}</td>
                            <td>{{ file_exists(database_path('factories/'.basename($model, '.php').'Factory.php')) ? 'Yes' : 'No' }}</td>
                            <td>{{ file_exists(database_path('seeders/' . basename($model, '.php') . 'Seeder.php')) ? 'Yes' : 'No' }}</td>
                            <td>{{ date("Y-m-d H:i:s", filemtime(app_path("Models/{$model}"))) }}</td>
            
                            <td>
                                <a href="{{ route('admin.DevTools.show', ['DevTool' => basename($model, '.php')]) }}">Show</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
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
            $('#Table').DataTable();
        });
    </script>
@stop
