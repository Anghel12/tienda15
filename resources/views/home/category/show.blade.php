<x-app-layout>


    @if (session('info'))
        <div class="alert alert-success">
             <strong> {{session('info')}} </strong>
        </div>
    @endif
    @include('home.category.partials.filtro_productos')

  @include('home.category.partials.post-relacionados')


  @include('home.category.partials.categorias')

</x-app-layout>
