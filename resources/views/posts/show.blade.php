<x-app-layout>

  @if (session('info'))
    <div class="alert alert-success">
         <strong> {{session('info')}} </strong>
    </div>
@endif


{{-- Componentes de Blog. liwire/blog/componentes --}}
{{-- imagen hace que recargue la pagina --}}
{{-- @livewire('home.post.show-home-post')
 --}}
<div class="container-fluid mb-20">

  @include('posts.show_partials.show_main_producto')
  
  @include('posts.show_partials.descripcion_producto')

  @include('posts.show_partials.similares')

</div>


    </x-app-layout>
    
    