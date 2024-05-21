<!-- Demo styles -->
<section class="text-gray-700">
    <div class="container px-6">
      <h3 class="text-2xl font-semibold text-center mb-10 Template_heading__BQOre">Blogs Nuevos</h3>
      <div class="row justify-content-center">
        <div class="swiper swiper-container-post">
          <div class="swiper-wrapper">
            @foreach ($blogs as $blog)
        <div class="swiper-slide">
        <div class="col-md-12 col-ms-6 mb-4">
          <div class="card shadow border rounded-lg">
            <div class="row">
              {{-- user --}}
              <div class="col-md-9">
                <a class="btn text-truncate" href="">
                  <p>titulo</p>
                </a>
              </div>
  
              {{-- user --}}
  
              {{-- favoritos --}}
              {{-- @if (Auth::check()) --}}
              <div class="col-md-3">
    
              </div>
              {{-- @endif --}}
              {{-- favoritos --}}
            </div>
            {{-- imagen del post --}}

            <a href="#">
              <figure class="block-4-image">
                <img class="card-img-top card-img-size"
                src="https://cdn.pixabay.com/photo/2022/09/04/12/24/hippos-7431581_960_720.jpg" alt="...">   
              </figure>
            </a>

            {{-- imagen del post --}}
  
            {{-- body card --}}
            <div class="block-4-text p-4">
              <h4 class="text-primary font-weight-bold">{{-- {{$post->name}} --}}</h4>
              <p class="mb-0">{{-- {!! $post->body !!} --}}</p>
              <h3 class="text-primary font-weight-bold"><strong>S/.{{-- {{$post->price_reciente}} --}}</strong></h3>
  
              {{--footer card --}}
  
              {{-- boton de carrtio de compras --}}
  
              <div class="row justify-content-center">
                {{-- <div class="col-4">
                  <p class="card-text" style=""><strong>S/.{{$post->price_reciente}}</strong></p>
                </div> --}}
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


{{-- <div class="mb-10">
    <div class="card shadow">
        <div class="row g-0 bg-body-secondary position-relative p-2 ">
             
            <div class="col-md-6 mb-md-0 p-md-4 ">
            <img src="https://tesisymasters.com.ar/wp-content/uploads/portada-nueva-blog-tym-Arg-15.jpg" class="w-100" alt="...">
            </div>
            <div class="col-md-6 p-4 ps-md-0">
                <h5 class="mt-0">Columns with stretched link</h5>
                <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
                <a href="#" class="stretched-link">Go somewhere</a>
            </div>
        </div>

    </div>
</div> --}}

