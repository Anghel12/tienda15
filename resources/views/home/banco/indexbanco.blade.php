<x-app-layout>


    @if (session('info'))
        <div class="alert alert-success">
             <strong> {{session('info')}} </strong>
        </div>
    @endif
    
    {{-- Componentes de Blog. liwire/blog/componentes --}}
    {{-- imagen hace que recargue la pagina --}}
    @livewire('home.banco.home-banco-index')
    
    
</x-app-layout>
{{-- llamo a mi app.blade --}}