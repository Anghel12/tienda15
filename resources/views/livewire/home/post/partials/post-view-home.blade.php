<style>
    .card-img-size {
  height: 200px;
  object-fit: cover;
}
.card-size {
  height: 400px;
}
.mb-10{
    margin-bottom: 2.5rem;
}

.mb-20{
    margin-bottom: 5rem;
  }

    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

/*     body {
      background: #000;
      color: #000;
    } */

    .swiper {
      width: 100%;
      height: 300px;
      margin-left: auto;
      margin-right: auto;
    }

    .swiper-slide {
      background-size: cover;
      background-position: center;
    }

    .mySwiper2 {
      height: 80%;
      width: 100%;
    }

    .mySwiper {
      height: 20%;
      box-sizing: border-box;
      padding: 10px 0;
    }

    .mySwiper .swiper-slide {
      width: 25%;
      height: 100%;
      opacity: 0.4;
    }

    .mySwiper .swiper-slide-thumb-active {
      opacity: 1;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>



<div class="mb-10">
    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
      <div thumbsSlider="" class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
          </div>
        </div>
      </div>

</div>


<!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>

    var swiper = new Swiper(".mySwiper", {
      loop: true,
      spaceBetween: 10,
      slidesPerView: 10,
      freeMode: true,
      watchSlidesProgress: true,
    });

    var swiper2 = new Swiper(".mySwiper2", {
      loop: true,
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiper,
      },
    });
  </script>

