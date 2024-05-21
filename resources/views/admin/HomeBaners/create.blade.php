@extends('adminlte::page')

@section('title', 'HomeBaners')

@section('content_header')
    <h1>Icons</h1>
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
                <div class="card-header">{{ __('Create Banner') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.HomeBaners.store') }}">
                        @csrf

                        <div>
                            <label for="imagenes">Imágenes:</label>
                            <input type="file" name="imagenes[]" id="imagenes" accept="image/*" multiple>
                        </div>

                        <div class="form-group row">
                            <label for="titulo" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{ old('titulo') }}" required autocomplete="titulo" autofocus>

                                @error('titulo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="extract" class="col-md-4 col-form-label text-md-right">{{ __('Extract') }}</label>

                            <div class="col-md-6">
                                <textarea id="extract" class="form-control @error('extract') is-invalid @enderror" name="extract" required>{{ old('extract') }}</textarea>

                                @error('extract')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cursos" class="col-md-4 col-form-label text-md-right">{{ __('Courses') }}</label>

                            <div class="col-md-6">
                                <input id="cursos" type="number" class="form-control @error('cursos') is-invalid @enderror" name="cursos" value="{{ old('cursos') }}">

                                @error('cursos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="articulos" class="col-md-4 col-form-label text-md-right">{{ __('Articles') }}</label>

                            <div class="col-md-6">
                                <input id="articulos" type="number" class="form-control @error('articulos') is-invalid @enderror" name="articulos" value="{{ old('articulos') }}">

                                @error('articulos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="users" class="col-md-4 col-form-label text-md-right">{{ __('Users') }}</label>

                            <div class="col-md-6">
                                <input id="users" type="number" class="form-control @error('users') is-invalid @enderror" name="users" value="{{ old('users') }}">

                                @error('users')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="coins" class="col-md-4 col-form-label text-md-right">{{ __('Coins') }}</label>
                        
                            <div class="col-md-6">
                                <input id="coins" type="number" class="form-control @error('coins') is-invalid @enderror" name="coins" value="{{ old('coins') }}">
                        
                                @error('coins')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="fecha_inicio" class="col-md-4 col-form-label text-md-right">{{ __('Start Date') }}</label>
                        
                            <div class="col-md-6">
                                <input id="fecha_inicio" type="datetime-local" class="form-control @error('fecha_inicio') is-invalid @enderror" name="fecha_inicio" value="{{ old('fecha_inicio') }}">
                        
                                @error('fecha_inicio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="fecha_fin" class="col-md-4 col-form-label text-md-right">{{ __('End Date') }}</label>
                        
                            <div class="col-md-6">
                                <input id="fecha_fin" type="datetime-local" class="form-control @error('fecha_fin') is-invalid @enderror" name="fecha_fin" value="{{ old('fecha_fin') }}">
                        
                                @error('fecha_fin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="activo" class="col-md-4 col-form-label text-md-right">{{ __('Active') }}</label>
                        
                            <div class="col-md-6">
                                <select id="activo" class="form-control @error('activo') is-invalid @enderror" name="activo">
                                    <option value="1" {{ old('activo') == 1 ? 'selected' : '' }}>{{ __('Yes') }}</option>
                                    <option value="0" {{ old('activo') == 0 ? 'selected' : '' }}>{{ __('No') }}</option>
                                </select>
                        
                                @error('activo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="posicion" class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>
                        
                            <div class="col-md-6">
                                <input id="posicion" type="text" class="form-control @error('posicion') is-invalid @enderror" name="posicion" value="{{ old('posicion') }}">
                        
                                @error('posicion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="tipo" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>
                        
                            <div class="col-md-6">
                                <input id="tipo" type="text" class="form-control @error('tipo') is-invalid @enderror" name="tipo" value="{{ old('tipo') }}">
                        
                                @error('tipo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>  

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                        
                        
                        
                </div>  
            </div>  
        </div>  
    </div>  
</div>                   


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
