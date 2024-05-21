
<div class="container text-center">
    <div class="row">
    <div class="col-8 ">

      <div class="card shadow p-3 mb-5 bg-body rounded">
        <div class="card-header">
          <H1 class="">{{$post->vistas}}</H1>
          <H1 class="">{{$post->name}}</H1>
      {{-- reseñas --}}
      <div class="card-footer">
        <div class="card-footer">
          <a href="{{ route('admin.reviews.create', ['post' => $post->id]) }}" class="btn btn-primary">Add Review</a>
      </div>
      
    
      {{-- reseñas --}}

        </div>
        <div class="card-body">
          {{-- POST DE IMAGEN --}}
          @if($post->image)
          <img src="{{$post->image->url}}" class="card-img-top" alt="...">
          <img src="{{Storage::url($post->image->url)}}" class="card-img-top" alt="...">
          @else
          <img src="https://cdn.pixabay.com/photo/2022/09/04/12/24/hippos-7431581_960_720.jpg" class="card-img-top" alt="...">
         @endif
  
          <div class="card-body">
            <h5 class="card-title">{{$post->name}}</h5>
            <p class="card-text">{{!!  $post->body !!}}</p>
            <p class="card-text">{{!! $post->extract !!}}</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

            {{-- precio post sow --}}
            @isset($post->price)

          <p class="card-text"><small class="text-muted">PRECIO: {{$post->price_reciente}}</small></p>
    
            @else
          <p class="card-text"><small class="text-muted">PRECIO: {{$post->price_reciente}}</small></p>
          
          @endisset
          </div>
        </div>
     
      </div>

      {{-- vista de comentarios post  --}}
      <h1>COMENTARIOS</h1>

      @if (session('info'))
        <div class="alert alert-success">
            <strong> {{session('info')}} </strong>
        </div>
       @endif

                 {{-- NOMBRE Y FOTO USUARIO LOGUEADO ELEMENTOS JETSTREAM --}}
         
       <div class="container">  
        @auth  
          <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             <li class="nav-item">
       <div class="shrink-0 mr-3">
             
           <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
       </div>
      </li>
      
       <li class="nav-item">
          <a class="nav-link active" aria-current="page"  href="{{ route('profile.show') }}">{{ Auth::user()->name }}</a> 
        </li>
      </ul>
      </nav>
        
       

      {!! Form::open(['route' => ['agregarmensaje', $post], 'autocomplete' => 'off', 'method' => 'POST']) !!}


      @include('posts.partials.formcomment')
      {!! Form::submit('Comentar', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
      </div>  

        @else
     
      </div>  
      <H1>Loqueate para que puedas comentar </H1>

        <a href="{{ route('login') }}" class="btn btn-primary">Logearse</a>


      @endauth


  {{--     <h1> {{$post->comment->mane}} </h1> --}}
      {{-- mirar los comentarios de los usuarios  --}}
          
      @forelse ($post->comment as $comments)

      <nav class="navbar navbar-dark navbar-expand-lg bg-light">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <div class="shrink-0 mr-3">
                 
         <img class="h-10 w-10 rounded-full object-cover" src="{{$comments->user->profile_photo_url}}" alt="" />
            
            </div>
          </li>
          <li class="nav-item">
            <p> Nombre: {{$comments->user->name}}  </p> 
        </li>
          <li class="nav-item p-2">
            <p>Comentario: {{$comments->mensaje}} </p>
           </li>
           <li class="nav-item p-2">
            <a href=""> Responder </a>
           </li>
           
     </ul>
     </nav>
      @empty
          
      <p>no se encontraron comentarios</p>
      @endforelse

     
    </div>




    {{-- posts relacionados con el post principal --}}
    <div class="col-4">
      
    <h1 class="p-4 text-uppercase">
      RELACIONADOS DE:{{$post->category->name}}
    </h1>
    @foreach ($similares as $similar)
      <div class="card mb-3 shadow p-3 mb-5 bg-body rounded" style="max-width: 400px;">
      <div class="row g-0">
        <div class="col-md-4">

          {{-- imagen relacionada al post principal --}}
          @if($similar->image)
            <a href="{{route('posts.show', $similar)}}">
          <img src="{{$similar->image->url}}" class="card-img-top" alt="...">
          <img src="{{Storage::url($similar->image->url)}}" class="card-img-top" alt="...">
          </a>
          @else
          <img src="https://cdn.pixabay.com/photo/2022/09/04/12/24/hippos-7431581_960_720.jpg" class="card-img-top" alt="...">
          @endif


        </div>
        <div class="col-md-8">
          <div class="card-body">
            <p class="card-text"><small class="text-muted">vistas:{{$similar->vistas}}</small></p>

            <a  href="{{route('posts.show', $similar)}}">
              <h5 class="card-title text-truncate" style="max-width: 180px;">{{$similar->name}}</h5>
            </a>
            
            <p class="card-text text-truncate" style="max-width: 180px;">{{!! $similar->body !!}}</p>
          {{--   <p class="card-text">{{!! $similar->extract !!}}</p> --}}
            @isset($similar->price_reciente)

          <p class="card-text"><small class="text-muted">PRECIO: {{$similar->price_reciente}}</small></p>
    
            @else
          <p class="card-text"><small class="text-muted">PRECIO: {{$similar->price_reciente}}</small></p>
          
          @endisset
          </div>
        </div>
      </div>
      </div>
    
      @endforeach


     </div>
    </div>
  </div>
