<x-app-layout>
  
  @if (session('info'))
  <div class="alert alert-success">
    <strong> {{session('info')}} </strong>
  </div>
  @endif

  <div class="bg-light">
    {{-- Carrusel --}}
    @include('posts.partials.carrusel_main')

      {{-- resumen de la pagina --}}
      @include('posts.partials.page_resumen')

    {{-- BANNER INDEX --}}
  {{--   @include('posts.partials.baner_empresa') --}}

    {{-- SERVICIOS LO QUE OFRECEMOS COMO PAGINA --}}
    @include('posts.partials.servicios')

    {{-- POSTS PUBLICADOS INDEX// class=container --}}
    @include('posts.partials.post')

    {{-- Blogs --}}
    @include('posts.partials.page_popular')

    {{-- Pricing/precios --}}
    @include('posts.partials.pricing')


    {{-- VIDEOS YOTUBE INDEX --}}
  {{--   @include('posts.partials.post_youtube_slider') --}}

    {{-- HomeBannerTitulo --}}
    @include('posts.partials.BannerTitulo')


    {{-- RESEÑAS DE LOS USUARIOS --}}
    @include('posts.partials.reseñas')


    {{-- @livewire('home.carrusel.main_carrusel')--}}
    {{-- @livewire('home.comment-slider') --}}

    @include('posts.partials.categorias')

    {{-- FORMULARIO DE CONTACTO --}}
    @include('posts.partials.form_contact')

    {{-- footer --}}
    @include('posts.partials.footer')

  </div>
  {{-- @livewire('home.posts-index') --}}
</x-app-layout>