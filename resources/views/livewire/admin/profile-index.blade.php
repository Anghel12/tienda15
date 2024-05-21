<div>
  {{-- div padre --}}


  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="text-center">
          <img class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" width="100" height="100" />
          <h1>{{ Auth::user()->name }}</h1>
        </div>
      </div>
    </div>
    <div class="container text-center">
  <div class="row">
<div class="col-sm-2 text-center">
  <div class="card">
    <div class="car-header">
      <h4 class="p-2">ROLE</h4>
    </div>
    <div class="card-body">

      <P>@if (Auth::user()->hasRole('Admin'))
        <span class="badge bg-primary">Administrador</span>
    @else

    <span class="badge bg-success">Usuario</span>

      @endif
    </P>
    </div>
  </div>
</div>

<div class="col-sm-2 text-center">
  <div class="card">
    <div class="car-header p-2">
      <h4>SALDO DE LA MONEDA:</h4>
      <P></P>
    </div>
    <div class="card-body">

      @foreach(Auth::user()->coins as $coin)
      <p>{{ $coin->name }}:
         
      @if ($coin->pivot->balance)
          {{ $coin->pivot->balance }}
      @else
          0
      @endif</p>
      
  @endforeach
  
    </P>
    </div>
  </div>
</div>
</div>
</div>

        <h2>Mi Biografia</h2>

        <div class="container">
          <h2 class="text-center">Mis post</h2>
          <div class="row">
        
   
      @foreach ($posts as $post)

      <div class="col-4">
        <div class="card max-width: 400px; ">
            <div class="card-header">
              {{-- genera un herror normal al crear los seeder porque tieness que refrescar la cache--}}
           <p>Autor: {{$post->user->name}}</p>

             {{-- VALORES DE PRUEEBA ESTADUS DOS PARA LOS POST QUE SE PUEDAN VER --}}
             <p>Estatus: {{$post->status}}  1 PUBLICADO, 2 DESACTIVADO</p>
             <p>id: {{$post->id}}</p>
  
                <a href=" {{route('posts.show', $post)}} ">
                    <h5 class="card-title text-truncate" style="max-width: 300px;" >Nombre del Post:{{$post->name}}</h5>
                </a>
             
            </div>
         {{-- imagen del post --}}
            @if($post->image)

            <a href="">
            <img src="{{$post->image->url}}" class="card-img-top" alt="...">
            <img src="{{Storage::url($post->image->url)}}" class="card-img-top" alt="...">
          </a>
            @else
            <a href="">
            <img src="https://cdn.pixabay.com/photo/2022/09/04/12/24/hippos-7431581_960_720.jpg" class="card-img-top" alt="...">
          </a>
            @endif
  
  
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text text-truncate" style="max-width: 400px;">{{!! $post->body !!}}</p>
            <p class="card-text text-truncate" style="max-width: 400px;">{{!! $post->extract !!}} </p>
  
            <h4>
                @isset($post->price)

                <p class="card-text"><small class="text-muted">PRECIO: {{$post->price->price_reciente}}</small></p>

                @endisset

            </h4>
            
          </div>
            
        </div>
     </div>

        
      @endforeach
       
      </div>
    </div>
  </div>
</div>
