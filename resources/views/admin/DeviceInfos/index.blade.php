@extends('adminlte::page')

@section('title', 'Mensajes')

@section('content_header')
    <h1>Rastreo de los usuarios </h1>
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
    <div class="container">
        <table id="Table" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>IP Address</th>
                    <th>Screen Resolution</th>
                    <th>Browser</th>
                    <th>Operating System</th>
                    <th>Device Type</th>
                    <th>Country</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Session Start</th>
                    <th>Session End</th>
                    <th>Page URL</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deviceInfos as $deviceInfo)
                    <tr>
                        <td>{{ $deviceInfo->id }}</td>
                        <td>{{ $deviceInfo->user_id }}</td>
                        <td>{{ $deviceInfo->ip_address }}</td>
                        <td>{{ $deviceInfo->screen_resolution }}</td>
                        <td>{{ $deviceInfo->browser }}</td>
                        <td>{{ $deviceInfo->operating_system }}</td>
                        <td>{{ $deviceInfo->device_type }}</td>
                        <td>{{ $deviceInfo->country }}</td>
                        <td>{{ $deviceInfo->state }}</td>
                        <td>{{ $deviceInfo->city }}</td>
                        <td>{{ $deviceInfo->session_start }}</td>
                        <td>{{ $deviceInfo->session_end }}</td>
                        <td>{{ $deviceInfo->page_url }}</td>
                        <td>{{ $deviceInfo->created_at }}</td>
                        <td>{{ $deviceInfo->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
