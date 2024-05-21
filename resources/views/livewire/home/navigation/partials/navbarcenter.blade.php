  {{-- medio buscador  --}}
   <!-- Barra de búsqueda -->
   <form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="{{$navbarConfig->buscarboton1}}" aria-label="Search">
 {{--    <button class="btn btn-outline-light" type="submit"><i class="fas fa-search"></i></button> --}}
  </form>
      {{-- medio buscador  --}}

{{--       <li class="nav-item">
        <a href=" {{route('google-auth')}} " class="nav-link">{{$navbarConfig->boton3}}</a>
      </li>

      <li class="nav-item">
        <a href=" {{route('facebook-auth')}} " class="nav-link">facebook</a>
      </li> 
        <li class="nav-item">
              <a href="{{ url('/terms') }}" class="nav-link active" aria-current="page" href="#">{{$navbarConfig->boton5}}</a>
            </li>   --}}
                    {{-- NOMBRE Y FOTO USUARIO LOGUEADO ELEMENTOS JETSTREAM --}}
                {{--     <a href="{{ route('profile.show') }}">         
                      <div class="shrink-0 mr-3">
                   
                          <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                      </div>
                    </a>  
                      <li class="nav-item">
                      <a class="nav-link active" aria-current="page"  href="{{ route('profile.show') }}">{{ Auth::user()->name }}</a> 
                      </li> --}}
            
         