{{-- ejemplo de post --}}
<!-- Swiper -->
<div class="site-section block-3 site-blocks-2 bg-light mb-20">
    <div class="container mb-20">
        <h1 class="text-style text-center p-2 mb-10">Lo mas visto</h1>

        <div class="row ">
            <div class="swiper swiper-container-post-popular">
                <div class="swiper-wrapper">
                    @foreach ($posts as $post)
                    <div class="swiper-slide">
                        <div class="col-md-12 mb-4 ">
                            <div class="block-4 text-center max-width: 400px;">
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
                                        {{-- @if (Auth::check()) --}}
                                        <div class="col-md-2">
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
                                </div>



                                {{-- imagen del post --}}
                                @if($post->images)
                                <a href="{{route('posts.show', $post)}}">
                                    <figure class="block-4-image">
                                        <img class="card-img-top card-img-size" src="{{$post->images->url}}" alt="...">
                                        <img class="card-img-top card-img-size"
                                            src="{{Storage::url($post->images->url)}}" style="height: 300px" alt="...">
                                    </figure>
                                </a>
                                @else
                                <a href="{{route('posts.show', $post)}}">
                                    <img class="card-img-top card-img-size"
                                        src="https://cdn.pixabay.com/photo/2022/09/04/12/24/hippos-7431581_960_720.jpg"
                                        alt="...">
                                </a>
                                @endif
                                {{-- imagen del post --}}

                                {{-- body card --}}
                                <div class="block-4-text p-4 ">
                                    <h3 class="text-primary font-weight-bold">{{$post->name}}</h3>
                                    <p class="mb-0">{{$post->body}}</p>
                                    <p class="text-primary font-weight-bold">
                                        <strong>S/.{{$post->price_reciente}}</strong></p>
                                </div>

                                {{--footer card --}}

                                {{-- boton de carrtio de compras --}}
                                <div class="card-footer">
                                    <div class="row justify-content-center">
                                        {{-- <div class="col-4">
                                            <p class="card-text" style=""><strong>S/.{{$post->price_reciente}}</strong>
                                            </p>
                                        </div> --}}
                                        <div class="col-8">
                                            {!! Form::open(['route' => 'agregaritem', 'autocomplete' => 'off', 'method'
                                            => 'POST']) !!}

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
</div>
<!-- Swiper JS -->

{{-- bonito resumen  --}}
<section class="counter-container">
    <div class="position-absolute start-0 end-0 w-100 counter-overlay" style="transform: skewY(-8deg)"></div>
    <div class="bg-holder d-none d-lg-block" style="background-image:url(../../assets/img/bg/bg-left-25.png);background-size:auto;background-position:left center;"></div>
    <!--/.bg-holder-->
    <div class="bg-holder d-none d-lg-block" style="background-image:url(../../assets/img/bg/bg-right-25.png);background-size:auto;background-position:right center;"></div>
    <!--/.bg-holder-->
    <div class="container-small position-relative">
      <div class="row gx-0 gy-8 justify-content-center">
        <div class="col-sm-6 col-md-auto me-md-5 pe-md-5 border-end-md border-dashed text-center order-2 order-md-0">
          <h1 class="fs-5 fs-lg-7 fw-bolder text-info mb-3"><span>$8750</span><span data-countup='{"endValue":8976,"duration":5,"suffix":""}'></span></h1>
          <h4>Revenue</h4>
        </div>
        <div class="col-sm-6 col-md-auto me-md-5 pe-md-5 border-end-md border-dashed text-center order-1 order-md-0">
          <h1 class="fs-5 fs-lg-7 fw-bolder text-info mb-3"><span data-countup='{"endValue":308,"duration":10,"suffix":""}'></span><span>K300</span></h1>
          <h4>User</h4>
        </div>
        <div class="col-sm-6 col-md-auto me-md-5 pe-md-5 border-end-md border-dashed text-center">
          <h1 class="fs-5 fs-lg-7 fw-bolder text-info mb-3" data-countup='{"endValue":12,"duration":0.5,"suffix":""}'>12</h1>
          <h4>Countries</h4>
        </div>
        <div class="col-sm-6 col-md-auto text-center">
          <h1 class="fs-5 fs-lg-7 fw-bolder text-info mb-3" data-countup='{"endValue":125,"duration":15,"suffix":"+"}'>125</h1>
          <h4>Stories</h4>
        </div>
      </div>
    </div>
  </section>
{{-- bonito resumen  --}}


{{-- post --}}
<!-- Demo styles -->
<section class="text-gray-700 mb-20">
    <div class="container px-6">
      <h3 class="text-2xl font-semibold text-center mb-10 Template_heading__BQOre">Productos Actuales</h3>
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
                <img class="card-img-top card-img-size" src="{{Storage::url($post->images->url)}}" style="height: 300px" alt="...">
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
{{-- post --}}


{{-- testimosnios --}}
  <!-- Swiper -->

  <div class="container mb-20">
    <h1 class="text-style text-center p-2 mb-10">Testimonials</h1>
    <div class="row">
        <div class="swiper swiper-container-reseñas">
            <div class="swiper-wrapper">
                @foreach ($reviews as $review)
                <div class="swiper-slide style-slider2">
                  <div class="shadow minimal-card">
                      <div class="profile-section">
                          <img class="profile-image" src="{{ $review->user->profile_photo_url }}" alt="{{ $review->name }}">
                          <p class="profile-name">{{$review->user->name}}</p>
                      </div>
                      
                      <div class="rating-section ">
                          <p class="rating">{{$review->rating}}</p>
                      </div>
              
                      <div class="comment-section">
                          <p class="comment">"{{$review->comment}}"</p>
                      </div>
                  </div>
              </div>
              
            @endforeach
          </div>
            {{-- paginacion --}}
     {{--        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> --}}
     <div class="swiper-pagination">
      </div> 
    </div>
    </div>
  </div>


{{-- post youtube feo --}}

<div class="mb-20"></div>
<h1 class="text-style text-center p-2 mb-10">VIDEOS</h1>
@foreach ($postyoutubes as $postyoutube)
<div class="container p-4 shadow mb-20 bg-light">
<div class="row g-0  position-relative">
    <div class="col-md-9 mb-md-0 ">
      <iframe width="90%" height="100%" src="https://www.youtube.com/embed/Nn65oL7OuzY?si=hgd23TVGWOfnVbrp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  
    </div>


    <div class="col-md-3 ps-md-0">
      <nav class="navbar navbar-dark navbar-expand-lg bg-light">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <div class="shrink-0 mr-3" >
                 
         <img class="h-10 w-10 rounded-full object-cover" style="max-height: 50px;" src="{{$postyoutube->user->profile_photo_url}}" alt="" /> 
            </div>
          </li>
          <li class="nav-item">
            <p> Nombre: {{$postyoutube->user->name}}  </p> 
        </li>
           
     </ul>
     </nav>
  
      <h5 class="mt-0">{{$postyoutube->name}}</h5>
      <p>{{!! $postyoutube->extract !!}}</p>
      <p href="#" class="stretched-link">{{!! $postyoutube->body !!}}</p>
      <a class="btn btn-success" href="{{ route('admin.postyoutubes.edit', $postyoutube) }}" > Editar </a>
    </div>
  </div>
</div>
@endforeach

{{-- servicios --}}

<section class="text-gray-700 mb-20">
    <div class="container px-6">
      <h3 class="text-2xl font-semibold text-center mb-10 Template_heading__BQOre">Servicios</h3>
      <div class="row justify-content-center">
        <div class="col-md-3 col-ms-6 mb-4"> 
          <div class="card shadow border rounded-lg card-size">
            <a href="https://codersfree.com/cursos">
              <img class="card-img-top card-img-size" src="https://codersfree.com/img/servicios/cursos.jpeg" alt="cursos">
            </a>
            <div class="card-body text-center">
              <h1 class="card-title text-xl font-semibold mb-2">
                <a class="btn style-btn" href="https://codersfree.com/cursos">Criptos</a>
              </h1>
              <p class="card-text text-sm">Encuentra los mejores cursos de Laravel en español. <a href="" class="text-indigo-500 font-semibold italic">Lista de cursos</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card shadow border rounded-lg card-size">
            <a href="https://codersfree.com/servicios/diseno-web">
              <img class="card-img-top card-img-size" src="https://codersfree.com/img/servicios/desarrollo.jpeg" alt="desarrollo web">
            </a>
            <div class="card-body text-center">
              <h1 class="card-title text-xl font-semibold mb-2">
                <a class="btn style-btn" href="https://codersfree.com/servicios/diseno-web">Banco</a>
              </h1>
              <p class="card-text text-sm">Escríbenos y nos pondremos en contacto contigo. <a href="https://codersfree.com/servicios/diseno-web" class="text-indigo-500 font-semibold italic">Contáctanos</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card shadow border rounded-lg card-size">
            <a href="">
              <img class="card-img-top card-img-size" src="https://codersfree.com/img/servicios/asesorias.jpg" alt="Asesorías de programación">
            </a>
            <div class="card-body text-center">
              <h1 class="card-title text-xl font-semibold mb-2">
                <a class="btn style-btn" href="">Nosotros</a>
              </h1>
              <p class="card-text text-sm">Necesitas ayuda para aprender algún tema. <a href="" class="text-indigo-500 font-semibold italic">Escríbenos</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card shadow border rounded-lg card-size">
            <a href="https://codersfree.com/posts">
              <img class="card-img-top card-img-size" src="https://codersfree.com/img/servicios/blog.jpeg" alt="blog">
            </a>
            <div class="card-body text-center">
              <h1 class="card-title text-xl font-semibold mb-2">
                <a class="btn style-btn" href="https://codersfree.com/posts">Blog</a>
            </h1>
            <p class="text-sm">Encuentra artículos de programación y actualidad. <a href="https://codersfree.com/posts" class="text-indigo-500 font-semibold italic">Lista de artículos</a></p>
          </article>
        </div>
      </div>
        </div>
        </div>
    </div>
  </section>


{{-- ser --}}
{{-- pag resumen  --}}

<div class="mb-10" style="max-width: auto;">

    @foreach ($banners as $banner)
    <div class="card mb-3 p-2 m-2" style="max-width: auto;">
      <div class="row g-0">
        <div class="col-md-4">


          @if($banner->images)

          <img src="{{Storage::url($banner->images->url)}}" class="d-block w-100" alt="..." style="height: 30rem;">

          @else
          <img src="https://hmntaml0.rocketcdn.com/project/381830/xl-imga-portall-0-AIqY.jpg"
            class="img-fluid rounded-start" alt="...">
          @endif

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{ $banner->titulo }}</h5>
            <p class="card-text">{{ $banner->extract }}</p>
            <p class="card-text"><small class="text-body-secondary">Cursos: {{ $banner->cursos }}, Artículos: {{
                $banner->articulos }}, Usuarios: {{ $banner->users }}, Coins: {{ $banner->coins }}</small></p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
{{-- pag resumen  --}}


{{-- blogs articulos slider --}}

<!-- Demo styles -->
<section class="pt-10" id="blog">
    <div class="container-small px-lg-7 px-xxl-3">
        <div class="text-center mb-5">
            <h5 class="text-info mb-3">Blogs</h5>
            <h2 class="mb-2">Our most viewed articles</h2>
        </div>
        <div class="row gx-3 gy-7">

            <div class="swiper swiper-container-post-popular">
                <div class="swiper-wrapper">

                    @foreach ($posts as $post)
                    <div class="swiper-slide">
                        <div class="col-lg-12">
                            <div class="blog-card"><img class="w-100 rounded-3"
                                    src="{{Storage::url($post->images->url)}}" style="height: 300px" alt="" />
                                <div class="d-flex align-items-cente mt-3"><a
                                        class="btn-link text-decoration-none text-800 d-flex align-items-center me-3"
                                        href="alternate.html#!"><span class="fa-solid fa-eye fs--1">
                                        </span><span class="fs--2 ms-1 lh-1">2563</span></a><a
                                        class="btn-link text-decoration-none text-800 d-flex align-items-center me-3"
                                        href="alternate.html#!"><span class="fa-solid fa-heart fs--1">
                                        </span><span class="ms-1 fs--2 lh-1">125</span></a><a
                                        class="btn-link text-decoration-none text-800 d-flex align-items-center"
                                        href="alternate.html#!"><span class="fa-solid fa-comment fs--1">
                                        </span><span class="ms-1 fs--2 lh-1">125</span></a></div><span
                                    class="badge bg-primary mb-2 mt-4">SEO</span>
                                <h4 class="mb-3 pe-sm-5 lh-lg">Top 10 ways to Ace SEO for your business</h4><a
                                    class="btn-link px-0 d-flex align-items-center fs--1 fw-bold"
                                    href="alternate.html#!" role="button">See more<span
                                        class="fa-solid fa-angle-right ms-2"></span></a>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>

        </div>
    </div><!-- end of .container-->
</section><!-- <section> close ============================-->

{{-- blogs articulos slider --}}










<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".swiper-container-post-popular", {
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
          slidesPerView: 2,
        },
        "@1.70": {
          slidesPerView: 3,
        },
        
      },
  });
</script>