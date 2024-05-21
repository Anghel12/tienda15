{{-- <div id="app"></div>
<script src="{{ asset('js/app.js') }}"></script>
 --}}
 <!-- Importar el archivo JavaScript -->

<!-- HTML del carrusel -->
 <!-- contenido de la página -->


<div class="swiper-container-carrusel-main mb-20" style="height:70vh;"> 
  <div class="swiper-wrapper">
    @forelse($sliders as $slider)
    <div class="swiper-slide">
      @if($slider->image->url)
      <img src="{{ asset(Storage::url($slider->image->url)) }}" alt="Slider Image" class="w-screen h-70vh object-cover position-relative">
      @else
      <img src="https://static.canalapps.com/uploads/2020/08/fondos-de-pantalla-canalapps.jpg" alt="Slider Image" class="w-screen h-70vh object-cover position-relative">
      @endif
      <div class="position-absolute izquierda-text-titulob translate-middle  text-white">
        <section class="pb-8 overflow-hidden" id="home">
          <div class="hero-header-container-alternate position-relative ">
            <div class="container-small px-lg-7 px-xxl-3 background-with-t">
              <div class="row align-items-center">
                <div class="col-12 col-lg-12 pt-8 pb-6 position-relative z-index-5 text-center text-lg-start">
                  <h1 class="fs-5 fs-md-6 fs-xl-7 fw-black mb-4 text-wtith"><span class="text-gradient-info me-3">Elegance</span>for<br />your web app</h1>
                  <p class="mb-5 pe-xl-10"> {{$slider->body}} </p>
                  
          
                  <a class="btn btn-lg btn-primary rounded-pill me-3" href="{{ url('/login') }}">Login</a>
                  <a class="btn btn-lg me-2 btn-primary rounded-pill" href="{{ url('/register') }}">sing up<span class="fa-solid fa-angle-right ms-2 fs--1"></span>
                  </a>
                
                </div>
            </div>
          </div>
        </section>  
{{--  
        <div><a href="{{ url('/login') }}"  class="login_banner_center">Login</a></div>
        <div><a href="{{ url('/register') }}"  class="login_banner_center">Registrarse ahora</a></div>
  
     --}}
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

.login_banner_center{
  border-radius: 50px;
    font-family: 'Montserrat';
    font-weight: 700;
    font-size: 16px;
    line-height: 16px;
    text-align: center;
    color: #fff;
    padding: 15px 40px;
    box-sizing: border-box;
    text-transform: uppercase;
    /* background-color: #00e3c2; */
    background-image: linear-gradient(to left, #74ebd5, #9face6);
    display: inline-block;
    margin: 5px;
}


.Template_hero-heading_banner{
  font-size: 3rem;
    color: #fff;
    font-family: Cormorant Garamond,serif;
    font-weight: 900;
    margin-top: 0;
    margin-bottom: 0.5rem;
}
.Template_hero-subtexts__CLvMS {
    font-family: Roboto,sans-serif;
    color: #fff;
    font-size: 18px;
    font-weight: 300;
    line-height: 1.7;
    opacity: 1;
    position: relative;
    margin-top: 0;
    margin-bottom: 1rem;
}
  .background_text_banner {
    max-width: 500px;
    margin-left: auto;
    background-color: hsla(0, 0%, 100%, 0.459);
    padding: 10px 20px;
    text-align: left;
  }



  .swiper-container-carrusel-main {
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
    var swiper = new Swiper('.swiper-container-carrusel-main', {
    direction: 'horizontal', // dirección del desplazamiento
    speed: 1000, // velocidad de animación en milisegundos 1000
    loop: true, // si se muestra el slider de manera circular
    autoplay: {
      delay: 100000, // tiempo de espera entre transiciones en milisegundos 10000
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

  