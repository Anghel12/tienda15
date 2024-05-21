<div>
    <div>
        <div class="swiper-container">
            <div class="swiper-wrapper" style="display:flex; flex-wrap:nowrap">
                <!-- Aquí van las tarjetas de comentarios -->
                @foreach ($comments as $comment)
                    <div class="swiper-slide" style="width:33.33%">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comment->mensaje }}</h5>
                                <p class="card-text">Posted by {{ $comment->user->name }} on {{ $comment->created_at }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @push('scripts')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      
      var swiper = new Swiper('.swiper-container', {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    clickable: true,
    // Habilita el arrastre del Swiper
    draggable: true,
    // Habilita la paginación del teclado
    keyboard: {
        enabled: true,
        onlyInViewport: false,
    },
});
    </script>
    @endpush
    

</div>