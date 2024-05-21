  <!-- Demo styles -->
<section class="text-gray-700 mb-20">
    <div class="container px-6">
      <h1 class="text-2xl font-semibold text-center mb-10">Productos:</h1>
      <div class="row justify-content-center">
        {{-- 4 post en la vista col-md-3 --}}
        @foreach ($posts as $post)
        <div class="col-md-3 mb-4">
          <div class="card shadow border rounded-lg max-width: 400px;">
            <div class="">

            <div class="row">
            {{-- user --}}
                <div class="col-md-9">
                    <a class="btn text-truncate" href="">
                        <p>{{$post->user->name}}</p>
                    </a>
                </div>
               
            {{-- user --}}

              {{-- favoritos --}}
                {{--     @if (Auth::check()) --}}
                <div class="col-md-2">
                <form method="POST" action="{{ route('admin.favorites.store') }}">
                    @csrf
                    <input type="hidden" name="item_id" value="{{ $post->id }}">
                    <button type="submit" class="btn btn-link">
                        <i class="far fa-heart"></i>
                    </button>
                    </form>
                </div>
            {{--    @endif --}}
            {{-- favoritos --}}
          </div>
        </div>



         {{-- imagen del post --}}
         @if($post->image)
        <a href="{{route('posts.show', $post)}}">
            <img class="card-img-top card-img-size" src="{{$post->image->url}}" alt="...">
            <img class="card-img-top card-img-size" src="{{Storage::url($post->image->url)}}"  alt="...">
        </a>
         @else
        <a href="{{route('posts.show', $post)}}">
           <img class="card-img-top card-img-size" src="https://cdn.pixabay.com/photo/2022/09/04/12/24/hippos-7431581_960_720.jpg" alt="...">
        </a>
         @endif
  {{-- imagen del post --}}

  {{-- body card --}}
    <div class="card-body">
        <p class="card-text text-truncate">{{$post->name}}</p>
        <p class="card-text text-truncate">{{$post->body}}</p>
     
    </div>

  {{--footer card --}}

            {{-- boton de carrtio de compras  --}}
    <div class="card-footer">
        <div class="row">
            <div class="col-4">
                <p class="card-text" style=""><strong>S/.{{$post->price_reciente}}</strong></p>
            </div>
            <div class="col-6">
            {!! Form::open(['route' => 'agregaritem', 'autocomplete' => 'off', 'method' => 'POST']) !!}

            {!! Form::hidden('Producto_id', $post->id) !!}

            {!! Form::hidden('Producto_precio', $post->price) !!}
        
              {!! Form::submit('Agregar al carrito', ['class' => 'btn btn-secondary']) !!}
      
              {!! Form::close() !!}
            </div>
        </div>
    </div>


        </div>
    </div>
      
        @endforeach


      </div>
    </div>
  </section>