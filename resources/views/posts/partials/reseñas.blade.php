<!-- <section> begin ============================-->
<section class="pb-14 overflow-x-hidden bg-white">
  <div class="container-small px-lg-7 px-xxl-3">
    <div class="text-center mb-5 position-relative">
      <h5 class="text-info mb-3">Testimonial</h5>
      <h2 class="mb-2 lh-base">What our customers has to say about us</h2>
    </div>
    <div class="bg-holder d-none d-md-block"
      style="background-image:url(../../assets/img/bg/39.png);background-size:186px;background-position:top 20px right 20px;">
    </div>
    <!--/.bg-holder-->
    <div class="row">
      <div class="swiper swiper-container-reseñas">
        <div class="swiper-wrapper">
          @foreach ($reviews as $review)
          <div class="swiper-slide border border-1 rounded-3">
            <div class="text-center py-8 px-5 px-xl-15 ">
              <span
                class="fa fa-star text-warning">{{$review->rating}}</span><span
                class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span>
              <h3 class="fw-semi-bold fst-italic mt-3 mb-8 w-xl-70 mx-auto lh-base">{{$review->comment}}</h3>
              <div class="d-flex align-items-center justify-content-center gap-3 mx-auto ">
                <div class="avatar avatar-3xl ">
                  <img class="rounded-circle border border-2 border-primary"
                    src="{{ $review->user->profile_photo_url }}" alt="{{ $review->name }}" />
                </div>
                <div class="text-start">
                  <h5>{{$review->user->name}}</h5>
                  <p class="mb-0">{{$review->user->rol}}</p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
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