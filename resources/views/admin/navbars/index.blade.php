@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<h1>NAVBAR </h1>
        {{-- alerta --}}
        @if (session('info'))
        <div class="alert alert-success">
             <strong> {{session('info')}} </strong>
        </div>
        @endif

@stop

@section('content')


    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12">
             @foreach ($navbars as $navbar)
                 
          
                <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
                    <div class="container-fluid">
                       
                      <a class="navbar-brand" href="#">{{$navbar->titulo}}</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">{{$navbar->boton1}}</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">{{$navbar->boton2}}</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">{{$navbar->boton3}}</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">{{$navbar->boton4}}</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">{{$navbar->boton5}}</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Dropdown
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </li>

                        </ul>
                        <form class="d-flex" role="search">
                          <input class="form-control me-2" type="search" placeholder="{{$navbar->subboton1}}" aria-label="Search">
                          <button class="btn btn-outline-success" type="submit">{{$navbar->subboton2}}</button>
                        </form>
                      </div>
                    </div>
                  </nav>
                  @endforeach

                  
            </div>
          <div class="col-sm-12">
            <h2 class="p-2">TABLA NAVBAR BOTONES</h2>
            
            <div class="card">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">CREADOR</th>
                    <th scope="col">TITULO</th>
                    <th scope="col">ADMIN URL</th>
                    <th scope="col">LOGIN</th>
                    <th scope="col">GOOGLE</th>
                    <th scope="col">LOGIN IN</th>
                    <th scope="col">HOME</th>
                    <th scope="col">CARRUSEL</th>

                    <th scope="col">search</th>
                    <th scope="col">SEARCHBTN</th>

                    <th colspan=""></th>
                    <th colspan=""></th>
                  </tr>
                </thead>
                <tbody>
           
                   
                  <tr>
               <th>{{$navbar->user->name}}</th>
                    <th>{{$navbar->titulo}}</th>
                    <td>{{$navbar->boton1}}</td>
                    <td>{{$navbar->boton2}}</td>
                    <td>{{$navbar->boton3}}</td>
                    <td>{{$navbar->boton4}}</td>
                    <td>{{$navbar->boton5}}</td>

                    <td>{{$navbar->subboton1}}</td>
                    <td>{{$navbar->subboton2}}</td>
                    <td>
                        <a class="btn btn-success float-right" href="{{ route('admin.navbars.edit', $navbar) }}" > Editar </a>
                    </td>  
                 
                    
               {{--      <td width="10px" >
    
                 
                        <form action="{{route('admin.navbar.destroy', $navbar)}}" method="POST">
                            @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm"> ELIMINAR</button>
                        </form>
            
                        
                    </td> --}}
                  </tr>
               
                </tbody>
              </table>
        </div>
    </div>
    </div>
    </div>

    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop
    
    @section('js')
        <script> console.log('Hi!'); </script>
    @stop