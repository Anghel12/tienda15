{{-- <div id="app"></div>
<script src="{{ asset('js/app.js') }}"></script>
 --}}
 <!-- Importar el archivo JavaScript -->

<!-- HTML del carrusel -->
 <!-- contenido de la página -->


 <div class="swiper-container-blog mb-20" style="height:70vh;">
    <div class="swiper-wrapper">
      @forelse($sliders as $slider) 
      <div class="swiper-slide">
        @if($slider->image->url)
        <img src="{{ asset(Storage::url($slider->image->url)) }}" alt="Slider Image" class="w-screen h-70vh object-cover position-relative">
        @else
        <img src="https://static.canalapps.com/uploads/2020/08/fondos-de-pantalla-canalapps.jpg" alt="Slider Image" class="w-screen h-70vh object-cover position-relative">
        @endif
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
          <h2 class="fw-bold fs-1">{{ $slider->title }}</h2>
          <h3 class="fs-4">{{ $slider->body }}</h3>
          @auth
          <h2 class="">APP</h2>
         @else
          <h2 class=""><a href="{{ url('/login') }}" class="btn btn-lg btn-success">Login</a></h2>
          <h2 class=""><a href="{{ url('/register') }}" class="btn btn-lg btn-success">Registrarse</a></h2>
         @endauth
        </div>
      </div>
      @empty
      <!-- En caso de que no haya imágenes para mostrar -->
      @endforelse
      <div class="swiper-pagination"></div>
      {{-- botones de slider  --}}
  {{-- 
      <div class="swiper-button-next swiper2-button-next"></div>
      <div class="swiper-button-prev swiper2-button-prev"></div> --}}
    </div>
  </div>
  
  <style>
    .swiper-container {
      height: 100vh;
    }
  
    .swiper-slide img {
      object-fit: fill;
      width: 100%;
      height: 100%;
    }
  
    .btn-danger {
      background-color: #dc3545;
      border-color: #dc3545;
    }
    .mb-20{
      margin-bottom: 5rem;
    }
  </style>
  
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
      var swiper = new Swiper('.swiper-container-blog', {
      direction: 'horizontal', // dirección del desplazamiento
      speed: 1000, // velocidad de animación en milisegundos
      loop: true, // si se muestra el slider de manera circular
      autoplay: {
        delay: 10000, // tiempo de espera entre transiciones en milisegundos
      },
      pagination: {
        el: '.swiper-pagination', // elemento que contendrá los indicadores de paginación
        clickable: true, // si se pueden hacer clic en los indicadores de paginación
      },
  
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      grabCursor: true,
      slidesPerView: 1, // mostrar solo una imagen a la vez
      centeredSlides: true, // mostrar la imagen centrada en la vista
      effect: 'fade', // efecto de desvanecimiento
    });
  </script>
  
    