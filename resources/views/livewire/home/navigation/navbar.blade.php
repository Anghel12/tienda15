<div>
  {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

  @foreach ($navbarConfigs as $navbarConfig)
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <div class="container-fluid fonts">
{{-- logo y nombre y links de navegacion app  --}}
    @include('livewire.home.navigation.partials.navbar_left')
{{-- logo y nombre y links de navegacion app  --}}
   
{{-- medio buscador  --}}
     @include('livewire.home.navigation.partials.navbarcenter')
{{-- medio buscador  --}}

{{-- lado derecho --}}
      @include('livewire.home.navigation.partials.navbar_right')
   
{{-- lado derecho --}}
    </div> 
  </div> 
</nav>
  @endforeach

  <style>

.fonts { 
  font-family: Robot,sans-serif;
}
    
  .badge-circle { 
  display: inline-block;
  width: 1.25rem;
  height: 1.25rem;
  border-radius: 50%;
  background-color: #dc3545;
  color: #fff;
  font-size: 0.75rem;
  text-align: center;
  line-height: 1.2;
  padding: 0.2rem;
}
  </style>

</div>
