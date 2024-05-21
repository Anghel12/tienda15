@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ADMIN</h1>
            {{-- alerta --}}
            @if (session('info'))
            <div class="alert alert-success">
                 <strong> {{session('info')}} </strong>
            </div>
            @endif
    <a class="btn btn-success float-right" href=" {{ route('admin.sliders.create') }}" > CREAR SLIDER </a>


@stop

@section('content')
    <p>INDEX</p>
     {{-- SLIDER BAR IMGANEN INDEX PRINCIPAL  --}}
    
 <div class="container text-center">
    <div class="row">
      <div class="col-sm-12">
      
        <h2 class="p-2">CARRUSEL VISTA PREVIA DE COMO SE MIRARA EN LA PAGINA PRINCIPAL</h2>
      <div class="card">

    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
      <div class="carousel-inner">
        @forelse($sliders as $slider) 
  
        <div class="carousel-item @if($loop->index==0) active @endif" data-bs-interval="10000">
  
            @if($slider->image)
              
              {{--     <img src="{{$slider->image->url}}" class="d-block w-100" alt="...">  --}}
              <img src="{{Storage::url($slider->image->url)}}" class="d-block w-100" alt="..." style="height: 30rem;">
                      
               @else
                <img src="https://cdn.pixabay.com/photo/2022/09/04/12/24/hippos-7431581_960_720.jpg" class="d-block w-100" alt="...">
             @endif 
      
              <div class="carousel-caption d-none d-md-block">
                <h5>{{$slider->title}}</h5>
                <p>{{$slider->body}}</p>
              </div>
            </div>
            @empty
            
            @endforelse
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  </div>
  </div>
  </div>

{{-- TABLA DE TODOS LOS SLIDER CREADOS   --}}
<div class="container text-center">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="p-2">TABLA DE TODOS LOS SLIDERS</h2>
        <div class="card">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">TITULO SLIDER</th>
                <th scope="col">CUERPO SLIDER</th>
            

                <th scope="col">Hora de actualizacion</th>
                <th scope="col">Hora de creacion</th>
                <th scope="col">IMAGEN</th>
                <th colspan=""></th>
                <th colspan=""></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($sliders as $slider)
              <tr>
                <th scope="row">{{$slider->id}}</th>
                <td>{{$slider->title}}</td>
                <td>{{$slider->body}}</td>
                <td>{{$slider->updated_at->diffForHumans() }} </td>
                <td>{{$slider->created_at->diffForHumans() }} </td>
                <td>
                    
                    <div class="shrink-0 mr-3">
                   
                      @if($slider->image)
              
                      {{--     <img src="{{$slider->image->url}}" class="d-block w-100" alt="...">  --}}
                      <img src="{{Storage::url($slider->image->url)}}" class="d-block w-100" alt="..." style="height: 30rem;">
                              
                       @else
                        <img src="https://cdn.pixabay.com/photo/2022/09/04/12/24/hippos-7431581_960_720.jpg" class="d-block w-100" alt="...">
                     @endif     
                    </div>
                </td>
                <td>
                    <a class="btn btn-success float-right" href="{{ route('admin.sliders.edit', $slider) }}" > Editar </a>
                </td>
             
                
                <td width="10px" >

                
                    <form action="{{route('admin.sliders.destroy', $slider)}}" method="POST">
                        @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm"> ELIMINAR</button>
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
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop