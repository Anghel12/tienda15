<div>

   <style>
      .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 100%;
        border-radius: 5px;
      }
      
      .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
      }
      
      img {
        border-radius: 5px 5px 0 0;
      }
      
      .container {
        padding: 2px 16px;
      }
      </style>
{{-- partes del blog/ home/blog/indexblog --}}

{{-- SLIDER DE BLOG  --}}
{{-- @include('livewire.home.blog.partials.slider-blog')

 --}}
<div class="text-center p-2 m-2">
   <h1>BLOG</h1>

   <div class="container mb-20">
      
      <div class="row">
         <div class="col-sm-12">
             {{-- sheard de blogs --}}
             @include('livewire.home.blog.partials.sheard-blog')
         </div>
      
  {{-- columna 1 col-8 --}}
         <div class="col-sm-8">
            {{-- MAIN BLOG --}}
            @include('livewire.home.blog.partials.show-blog-id')

         </div>

         {{-- columna 2 col-4 --}}
         <div class="col-sm-4">
            {{-- POPULAR PAGE--}}
            @include('livewire.home.blog.partials.popular-page')
         </div>

           {{-- Todos lo blogs --}}
           @include('livewire.home.blog.partials.all-blogs')
         {{-- Servicios que ofrece --}}
         @include('livewire.home.blog.partials.servicios')
      </div>
  </div>

</div>





{{-- footer  --}}
{{-- @include('livewire.home.blog.partials.footer')

 --}}
</div>
