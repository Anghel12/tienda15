<x-app-layout>
  
    @if (session('info'))
    <div class="alert alert-success">
         <strong> {{session('info')}} </strong>
    </div>
@endif

    @livewire('shop.checkout-component')

</x-app-layout>