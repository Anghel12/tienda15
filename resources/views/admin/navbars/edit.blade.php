@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <h1>ADMIN</h1>

@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif

    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12">
                
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
           


                  
            </div>
          <div class="col-sm-12">
            <h2 class="p-2">TABLA NAVBAR BOTONES</h2>
            
            <div class="card">
            <table class="table table-striped text-center">
                <thead>
                  <tr>

                    <th scope="col">TITULO</th>
                    <th scope="col">ADMIN URL</th>
                    <th scope="col">LOGIN</th>
                    <th scope="col">GOOGLE</th>
                    <th scope="col">LOGIN IN</th>
                    <th scope="col">HOME</th>
                    <th scope="col">CARRUSEL</th>

                    <th scope="col">search</th>
                    <th scope="col">searchbtn</th>

                    <th colspan=""></th>
                    <th colspan=""></th>
                  </tr>
                </thead>
               

                    {!! Form::model($navbar, ['route' => ['admin.navbars.update', $navbar], 'autocomplete' => 'off', 'files' => true, 'method' => 'PUT']) !!}
            
                    {!! Form::hidden('user_id', auth()->user()->id) !!}
                
                    <tbody>
                    @include('admin.navbars.partials.form')

                   
              
                </tbody>
                
                    {!! Form::submit('Crear post', ['class' => 'text-center btn btn-primary']) !!}
                

        
            
                {!! Form::close() !!}
              </table>
              
             <strong>
                <p>
                   LETRAS MAXIMAS 10
               </p>
                  
           </strong>
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