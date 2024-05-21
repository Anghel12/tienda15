<x-app-layout>


    @if (session('info'))
        <div class="alert alert-success">
             <strong> {{session('info')}} </strong>
        </div>
    @endif
    <h1>index category</h1>
    {{-- Componentes de Blog. liwire/blog/componentes --}}
    {{-- imagen hace que recargue la pagina --}}
{{--     @livewire('home.category.index-home-category')
 --}}
    
</x-app-layout>
{{-- llamo a mi app.blade --}}