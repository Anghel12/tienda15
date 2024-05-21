<div>
    <div class="container">
        <div class="row">
            <h1 class="text-style-h1 text-center mb-10">Nacimos con el sueño de ofrecer la mejor experiencia de cambiar dinero en Latinoamérica.</h1>
        
        <p class="text-center mb-20">Y en tres años hemos logrado el reconocimiento de marcas innovadoras y de instituciones que fomentan las buenas prácticas financieras.
            
        </p>
        
<section class="text-gray-700 mb-20">
    <div class="container px-6">
      <h3 class="text-2xl font-semibold text-center mb-10 Template_heading__BQOre">Nuestra historia</h3>
      <div class="row justify-content-center">
        @foreach ($aboutUsHomes as $aboutUsHome)
                
        <div class="col-md-3 col-ms-6 mb-4"> 
          <div class="card shadow border rounded-lg card-size">
            <a href="https://codersfree.com/cursos">
              <img class="card-img-top card-img-size" src="https://codersfree.com/img/servicios/cursos.jpeg" alt="cursos">
            </a>
            <div class="card-body text-center">
              <h1 class="card-title text-xl font-semibold mb-2">
      
                <a class="btn style-btn" href="https://codersfree.com/cursos">{{$aboutUsHome->title}}</a>
              </h1>
              <p class="card-text text-sm">{{$aboutUsHome->body}}<a href="" class="text-indigo-500 font-semibold italic">Lista de cursos</a></p>
            </div>
          </div> 
        </div>
        @endforeach
        </div>
    </div>
  </section>

  <h1 class="text-style-h1 text-center mb-10">Construye la historia con nosotros</h1>
  <h1 class="card-title text-xl font-semibold mb-2">
    <a class="btn style-btn" href="https://codersfree.com/cursos">Criptos</a>
  </h1>      


<section class="text-gray-700 mb-20">
    <div class="container px-6">
      <h3 class="text-2xl font-semibold text-center mb-10 Template_heading__BQOre">Nuestros clientes</h3>
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

        </div>
    </div>
  </section>
        </div>
    </div>
</div>
  

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".swiper-container-reseñas", {
        grabCursor: true,
    slidesPerView: 2,
      spaceBetween: 40,
      loop: true,
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
            slidesPerView: 1,
          },
          "@1.50": {
            slidesPerView: 1,
          },
        },
    });
  </script>