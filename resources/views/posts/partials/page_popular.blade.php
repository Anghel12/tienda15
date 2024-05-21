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
              <div class="blog-card"><img class="w-100 rounded-3" src="{{Storage::url($post->images->url)}}"
                  style="height: 300px" alt="" />
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
                  class="btn-link px-0 d-flex align-items-center fs--1 fw-bold" href="alternate.html#!"
                  role="button">See more<span class="fa-solid fa-angle-right ms-2"></span></a>
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