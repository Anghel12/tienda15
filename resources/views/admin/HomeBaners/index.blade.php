@extends('adminlte::page')

@section('title', 'HomeBaners')

@section('content_header')
    <h1>HomeBaners</h1>
    <a href="{{ route('admin.HomeBaners.create') }}" class="btn btn-primary">Agregar HomeBaners de Entorno</a>
        {{-- alerta --}}
        @if (session('info'))
        <div class="alert alert-success">
             <strong> {{session('info')}} </strong>
        </div>
        @endif
@stop

@section('content')




      @foreach ($banners as $banner)
      <div class="card mb-3 p-2 m-2" style="max-width: auto;">
        <div class="row g-0">
          <div class="col-md-4">
  
                             
                  @if($banner->images)

                  <img src="{{Storage::url($banner->images->url)}}" class="d-block w-100" alt="..." style="height: 30rem;">
                        
                  @else
                  <img src="https://hmntaml0.rocketcdn.com/project/381830/xl-imga-portall-0-AIqY.jpg" class="img-fluid rounded-start" alt="...">
                  @endif 
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $banner->titulo }}</h5>
                            <p class="card-text">{{ $banner->extract }}</p>
                            <p class="card-text"><small class="text-body-secondary">Cursos: {{ $banner->cursos }}, Artículos: {{ $banner->articulos }}, Usuarios: {{ $banner->users }}, Coins: {{ $banner->coins }}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach



    <table class="table table-striped" id="usersTable">
      <thead>
          <tr>
              <th>Título</th>
              <th>Extracto</th>
              <th>Cursos</th>
              <th>Artículos</th>
              <th>Usuarios</th>
              <th>Monedas</th>
              <th>Activo</th>
              <th>Tipo</th>

              <th>Acciones</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($banners as $banner)
              <tr>
                  <td>{{ $banner->titulo }}</td>
                  <td>{{ $banner->extract }}</td>
                  <td>{{ $banner->cursos }}</td>
                  <td>{{ $banner->articulos }}</td>
                  <td>{{ $banner->users }}</td>
                  <td>{{ $banner->coins }}</td>
                  <td>{{ $banner->activo ? 'Sí' : 'No' }}</td>
                  <td>{{ $banner->tipo }}</td>
                  <td>
                      <a href="{{ route('admin.HomeBaners.show', $banner->id) }}">Ver</a>
                      <a href="{{ route('admin.HomeBaners.edit', $banner->id) }}">Editar</a>
                      <form action="{{ route('admin.HomeBaners.destroy', $banner->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit">Eliminar</button>
                      </form>
                  </td>
              </tr>
          @endforeach
      </tbody>
  </table>
  @if (empty($banners))

@else
<div class="row row-cols-2 row-cols-md-3 row-cols-lg-4">
    <div class="card mb-3" style="max-width: auto;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://hmntaml0.rocketcdn.com/project/381830/xl-imga-portall-0-AIqY.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
</div>

@endif


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
