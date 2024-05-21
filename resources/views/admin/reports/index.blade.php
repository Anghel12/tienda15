@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Report</h1>
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
          <div class="card-header">{{ __('Reports') }}</div>

          <div class="card-body">
            <table id="myTable" class="table">
              <thead>
                <tr>
                  <th scope="col">{{ __('Title') }}</th>
                  <th scope="col">{{ __('Area') }}</th>
                  <th scope="col">{{ __('Details') }}</th>
                  <th scope="col">{{ __('Images') }}</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($reports as $report)
                  <tr>
                    <td>{{ $report->titulo }}</td>
                    <td>{{ $report->area }}</td>
                    <td>{{ $report->detalles }}</td>
                    <td>
                      @foreach ($report->images as $image)
                        <img src="{{ Storage::url($image->url) }}" width="100" height="100">
                      @endforeach
                    </td>
                    <td>
                        <a href="{{ route('admin.reports.show', $report->id) }}">Ver</a>
                        <a href="{{ route('admin.reports.edit', $report->id) }}">Editar</a>
                        <form action="{{ route('admin.reports.destroy', $report->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
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