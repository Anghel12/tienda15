<section class="pt-10 bg-white" id="post">
  <div class="container-small px-lg-7 px-xxl-3">
    <div class="text-center mb-5">
      <h5 class="text-info mb-3">Productos</h5>
      <h2 class="mb-2">productos mas destacados</h2>
    </div>
    <div class="row gx-3 gy-7">

      <div class="swiper swiper-container-post">
        <div class="swiper-wrapper">

          @foreach ($posts as $post)
          <div class="swiper-slide">
            <div class="col-lg-12">


           
              <div class="position-relative text-decoration-none product-card h-100">
                <div class="d-flex flex-column justify-content-between h-100">
                  <div>
                    <div class="border border-1 rounded-3 position-relative mb-3">
                      {{-- favoritos --}}
                      <form method="POST" action="{{ route('admin.favorites.store') }}">
                        @csrf
                        <input type="hidden" name="item_id" value="{{ $post->id }}">
                        <button
                          class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                          type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist">
                          <span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span>
                        </button>
                      </form>
                      {{-- favoritos --}}
  
                      <img style="height:200px" class="img-fluid rounded-3" src="{{Storage::url($post->images->url)}}"
                        alt="" />
                    </div>
                    <a class="stretched-link" href="{{route('posts.show', $post)}}">
                      <h6 class="mb-2 lh-sm line-clamp-3 product-name">{{$post->name}}</h6>
                    </a>
                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                        class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                        class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                        class="text-500 fw-semi-bold ms-1">(64 people rated)</span>
                      </p>
                  </div>
                  <div>
                    <p class="fs--1 text-1000 fs--1 mb-0 fw-bold">{!! $post->body !!}</p>
                    <p class="fs--1 text-700 fs--1 mb-2">supports Windows 11</p>
                    <h3 class="text-1100">${{$post->price_reciente}}</h3>
                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">1 colors</p>
  
                    {{-- carrito --}}
                    <div class="">
                      {!! Form::open(['route' => 'agregaritem', 'autocomplete' => 'off', 'method' => 'POST']) !!}
  
                      {!! Form::hidden('Producto_id', $post->id) !!}
  
                      {!! Form::hidden('Producto_precio', $post->price) !!}
  
                      {!! Form::submit('Agregar al carrito', ['class' => 'btn style-btn']) !!}
  
                      {!! Form::close() !!}
                    </div>
                    {{-- carrito --}}
                  </div>
                </div>
              </div>


            </div>
          </div>
          @endforeach


        </div>
            {{-- paginacion --}}
           
         <div class="swiper-pagination">
          </div> 
      </div>

    </div>
  </div><!-- end of .container-->
</section><!-- <section> close ============================-->




<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".swiper-container-post", {
      grabCursor: true,
    slidesPerView: 4,
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
          slidesPerView: 1,
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