 <!-- Demo styles -->
 <section class="text-gray-700 mb-20">
    <div class="container px-6 mb-top-20">
      <h3 class="text-2xl font-semibold text-center mb-10 Template_heading__BQOre">Post relacionadas a {{$category->name}}</h3>
      <div class="row justify-content-center">
        <div class="swiper swiper-container-post">
          <div class="swiper-wrapper">
        @foreach ($posts as $post)
        <div class="swiper-slide">
        <div class="col-md-12 col-ms-6 mb-4">
          <div class="card shadow border rounded-lg">
            <div class="row">
              {{-- user --}}
              <div class="col-md-9">
                <a class="btn text-truncate" href="">
                  <p>{{$post->user->name}}</p>
                </a>
              </div>
  
              {{-- user --}}
  
              {{-- favoritos --}}
              {{-- @if (Auth::check()) --}}
              <div class="col-md-3">
                <form method="POST" action="{{ route('admin.favorites.store') }}">
                  @csrf
                  <input type="hidden" name="item_id" value="{{ $post->id }}">
                  <button type="submit" class="btn btn-link">
                    <i class="far fa-heart"></i>
                  </button>
                </form>
              </div>
              {{-- @endif --}}
              {{-- favoritos --}}
            </div>
            {{-- imagen del post --}}
            @if($post->images)
            <a href="{{route('posts.show', $post)}}">
              <figure class="block-4-image">
                <img class="card-img-top card-img-size" src="{{Storage::url($post->images->url)}}" alt="...">
              </figure>
  
            </a>
            @else
            <a href="{{route('posts.show', $post)}}">
              <figure class="block-4-image">
                <img class="card-img-top card-img-size"
                src="https://cdn.pixabay.com/photo/2022/09/04/12/24/hippos-7431581_960_720.jpg" alt="...">   
              </figure>
            </a>
            @endif
            {{-- imagen del post --}}
  
            {{-- body card --}}
            <div class="block-4-text p-4">
              <h4 class="text-primary font-weight-bold">{{$post->name}}</h4>
              <p class="mb-0">{!! $post->body !!}</p>
              <h3 class="text-primary font-weight-bold"><strong>S/.{{$post->price_reciente}}</strong></h3>
  
              {{--footer card --}}
  
              {{-- boton de carrtio de compras --}}
  
              <div class="row justify-content-center">
                {{-- <div class="col-4">
                  <p class="card-text" style=""><strong>S/.{{$post->price_reciente}}</strong></p>
                </div> --}}
                <div class="">
                  {!! Form::open(['route' => 'agregaritem', 'autocomplete' => 'off', 'method' => 'POST']) !!}
  
                  {!! Form::hidden('Producto_id', $post->id) !!}
  
                  {!! Form::hidden('Producto_precio', $post->price) !!}
  
                  {!! Form::submit('Agregar al carrito', ['class' => 'btn style-btn']) !!}
  
                  {!! Form::close() !!}
                </div>
              </div>
  
            </div>
          </div>
        </div>
      </div>
        @endforeach
      </div>
         {{-- paginacion --}}
         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>
         <div class="swiper-pagination">
         </div>
  
      </div>
      </div>
    </div>
  </section>
  
  
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".swiper-container-post", {
        grabCursor: true,
      slidesPerView: 20,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      }, 
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    breakpoints: {
          "@0.00": {
            slidesPerView: 1,
          },
          "@0.75": {
            slidesPerView: 2,
          },
          "@1.00": {
            slidesPerView: 3,
          },
          "@1.70": {
            slidesPerView: 4,
          },
          
        },
    });
  </script>