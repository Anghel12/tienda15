<div class="container text-center mb-20">
    <h1 class="mb-10">
       
    </h1>

    <h1 class="text-style text-center p-2 mb-10">  Categorias Populares </h1>
    <div class="row g-2 g-lg-3">
  
    <!-- Swiper -->
    <div class="swiper categoriesSwiper">
      <div class="swiper-wrapper">
       
          @foreach ($categories as $category)
           
        <div class="swiper-slide">
            
        <div class="card-group " >
          <div class="card" style="height: 200px;">
            <a class="link" href="{{route('home.category.show', $category)}}"> 
                <div class="card-body">
                      <img src="https://pine-app1e.com/wp-content/uploads/2021/08/google.png" class="card-img-top" alt="..." style="max-height: 80px;">
                      <div class="">
                     
                                      <h5 class="card-title">{{$category->name}}</h5>
                      </div>
          
                  </div>
                </a>
                </div>
              </div>
              </div>
        @endforeach
      </div>
      <div class="swiper-pagination"></div>
    </div>
  
  </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script>
      var swiper = new Swiper('.categoriesSwiper', {
        slidesPerView: 10,
        grabCursor: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        breakpoints: {
          "@0.00": {
            slidesPerView: 3,
          },
          "@0.75": {
            slidesPerView: 6,
          },
          "@1.00": {
            slidesPerView: 8,
          },
          "@1.50": {
            slidesPerView: 10,
          },
        },
      });
  </script>


