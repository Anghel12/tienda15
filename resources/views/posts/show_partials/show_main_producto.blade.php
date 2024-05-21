<style>
    html,
    body {
      position: relative;
      height: 100%;
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

    body {
      background: #ffffff;
      color: #ffffff;
    }

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
      height: 100%;
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

    
    .mb-20 {
      margin-bottom: 5rem;
    }

    .mb-10 {
      margin-bottom: 2.5rem;

    }
  </style>

    <!-- <section> begin ============================-->
      <section class="py-0">
        <div class="container-small">
          <nav class="mb-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="product-details.html#">Fashion</a></li>
              <li class="breadcrumb-item"><a href="product-details.html#">Womens fashion</a></li>
              <li class="breadcrumb-item"><a href="product-details.html#">Footwear</a></li>
              <li class="breadcrumb-item active" aria-current="page">Hills</li>
            </ol>
          </nav>
          <div class="row g-5 mb-5 mb-lg-8" data-product-details="data-product-details">
            <div class="col-12 col-lg-6">
              <div class="row g-3 mb-3">

                <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                  <div class="d-flex align-items-center border rounded-3 text-center p-5 h-100">
                    <div class="swiper swiper-container theme-slider" data-thumb-target="swiper-products-thumb" data-products-swiper='{"slidesPerView":1,"spaceBetween":16,"thumbsEl":".swiper-products-thumb"}'>

                      <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2  theme-slider">
                        <div class="swiper-wrapper">
                            @foreach ($images as $image)
                                <div class="swiper-slide">
                                    <img src="{{ Storage::url($image->url) }}" />
                                </div>
                            @endforeach
                        </div>
                    {{--     <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div> --}}
                    </div>

                    </div>
                  </div>
                </div>

            
                  <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($images as $image)
                            <div class="swiper-slide">
                              <img src="{{ Storage::url($image->url) }}" />
                            </div>
                        @endforeach
                    </div>
                </div>
                  
            

              </div>
              <div class="d-flex">
                @auth
                <a  href="{{route('checkout')}}" class="btn btn-lg btn-outline-warning rounded-pill w-100 me-3 px-2 px-sm-4 fs--1 fs-sm-0"><span class="me-2 far fa-heart"></span>Comprar ahora
                </a>
                @else
          
                <a  href="{{route('login')}}" class="btn btn-lg btn-outline-warning rounded-pill w-100 me-3 px-2 px-sm-4 fs--1 fs-sm-0"><span class="me-2 far fa-heart"></span>Comprar ahora
                </a>
              @endauth

                {!! Form::open(['route' => 'agregaritem', 'autocomplete' => 'off', 'method' => 'POST']) !!}
    
                {!! Form::hidden('Producto_id', $post->id) !!}
    
                {!! Form::hidden('Producto_precio', $post->price_reciente) !!}
            
                <button class="btn btn-lg btn-warning rounded-pill w-100 fs--1 fs-sm-0"><span class="fas fa-shopping-cart me-2"></span>Add to cart</button>
          
                  {!! Form::close() !!}
               
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="d-flex flex-column justify-content-between h-100">
                <div>
                  <div class="d-flex flex-wrap">
                    <div class="me-2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></div>
                    <p class="text-primary fw-semi-bold mb-2">6548 People rated and reviewed </p>
                  </div>
                  <h3 class="mb-3 lh-sm">{{$post->name}}24" iMac® with Retina 4.5K display - Apple M1 8GB Memory - 256GB SSD - w/Touch ID (Latest Model) - Blue</h3>
                  <div class="d-flex flex-wrap align-items-start mb-3"><span class="badge bg-success fs--1 rounded-pill me-2 fw-semi-bold">#1 Best seller</span><a class="fw-semi-bold" href="product-details.html#!">in Phoenix sell analytics 2021</a></div>
                  <div class="d-flex flex-wrap align-items-center">
                    <h1 class="me-3">${{$post->price_reciente}}</h1>
                    <p class="text-500 text-decoration-line-through fs-2 mb-0 me-3">{{$post->price_reciente}}</p>
                    <p class="text-warning-500 fw-bolder fs-2 mb-0">10% off</p>
                  </div>
                  <p class="text-success fw-semi-bold fs-1 mb-2">In stock</p>
                  <p class="mb-2 text-800"> {{$post->body}} </p>
                  <p class="text-danger-500 fw-bold mb-5 mb-lg-0">Special offer ends in 23:00:45 hours</p>
                </div>
                <div>
                  <div class="mb-3">
                    <p class="fw-semi-bold mb-2 text-900">Color : <span class="text-1100" data-product-color="data-product-color">Blue</span></p>
                    <div class="d-flex product-color-variants" data-product-color-variants="data-product-color-variants">
                      <div class="rounded-1 border me-2 active" data-variant="Blue" data-products-images='["../../../assets/img/products/details/blue_front.png","../../../assets/img/products/details/blue_back.png","../../../assets/img/products/details/blue_side.png"]'><img src="../../../assets/img/products/details/blue_front.png" alt="" width="38" /></div>
                      <div class="rounded-1 border me-2" data-variant="Red" data-products-images='["../../../assets/img/products/details/red_front.png","../../../assets/img/products/details/red_back.png","../../../assets/img/products/details/red_side.png"]'><img src="../../../assets/img/products/details/red_front.png" alt="" width="38" /></div>
                      <div class="rounded-1 border me-2" data-variant="Green" data-products-images='["../../../assets/img/products/details/green_front.png","../../../assets/img/products/details/green_back.png","../../../assets/img/products/details/green_side.png"]'><img src="../../../assets/img/products/details/green_front.png" alt="" width="38" /></div>
                      <div class="rounded-1 border me-2" data-variant="Purple" data-products-images='["../../../assets/img/products/details/purple_front.png","../../../assets/img/products/details/purple_back.png","../../../assets/img/products/details/purple_side.png"]'><img src="../../../assets/img/products/details/purple_front.png" alt="" width="38" /></div>
                      <div class="rounded-1 border me-2" data-variant="Silver" data-products-images='["../../../assets/img/products/details/silver_front.png","../../../assets/img/products/details/silver_back.png","../../../assets/img/products/details/silver_side.png"]'><img src="../../../assets/img/products/details/silver_front.png" alt="" width="38" /></div>
                      <div class="rounded-1 border me-2" data-variant="Yellow" data-products-images='["../../../assets/img/products/details/yellow_front.png","../../../assets/img/products/details/yellow_back.png","../../../assets/img/products/details/yellow_side.png"]'><img src="../../../assets/img/products/details/yellow_front.png" alt="" width="38" /></div>
                      <div class="rounded-1 border me-2" data-variant="Orange" data-products-images='["../../../assets/img/products/details/orange_front.png","../../../assets/img/products/details/orange_back.png","../../../assets/img/products/details/orange_side.png"]'><img src="../../../assets/img/products/details/orange_front.png" alt="" width="38" /></div>
                    </div>
                  </div>
                  <div class="row g-3 g-sm-5 align-items-end">
                    <div class="col-12 col-sm-auto">
                      <p class="fw-semi-bold mb-2 text-900">Size : </p>
                      <div class="d-flex align-items-center"><select class="form-select w-auto">
                          <option value="44">44</option>
                          <option value="22">22</option>
                          <option value="18">18</option>
                        </select><a class="ms-2 fs--1 fw-semi-bold" href="product-details.html#!">Size chart</a></div>
                    </div>
                    <div class="col-12 col-sm">
                      <p class="fw-semi-bold mb-2 text-900">Quantity : </p>
                      <div class="d-flex justify-content-between align-items-end">
                        <div class="d-flex flex-between-center" data-quantity="data-quantity"><button class="btn btn-phoenix-primary px-3" data-type="minus"><span class="fas fa-minus"></span></button><input class="form-control text-center input-spin-none bg-transparent border-0 outline-none" style="width:50px;" type="number" min="1" value="2" /><button class="btn btn-phoenix-primary px-3" data-type="plus"><span class="fas fa-plus"></span></button></div><button class="btn btn-phoenix-primary px-3 border-0"><span class="fas fa-share-alt fs-1"></span></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
  
<div class="container">
    <div class="row">

 {{--      <div class="col-md-5">
        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
            <div class="swiper-wrapper">
                @foreach ($images as $image)
                    <div class="swiper-slide">
                        <img src="{{ Storage::url($image->url) }}" />
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div thumbsSlider="" class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($images as $image)
                    <div class="swiper-slide">
                      <img src="{{ Storage::url($image->url) }}" />
                    </div>
                @endforeach
            </div>
        </div>
        
    </div>  --}}


  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      loop: true,
      spaceBetween: 10,
      slidesPerView: 4,
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