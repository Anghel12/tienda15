{{-- Logo App --}}

    <!-- Logo y nombre de la app -->
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="ruta/a/tu/logo.png" alt="logo" width="30" height="30" class="d-inline-block align-text-top">
        {{$navbarConfig->titulo}}
      </a>
      <!-- Botones de Inicio, Blog y Categorías -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
{{-- Logo  App--}}

    {{-- boton lado izquierda  --}}
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white">


              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">
                  <i class="fas fa-home"></i> Inicio
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home.banco.indexbanco') }}">
                    <i class="fas fa-bank"></i> Banco
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home.about.indexaboutus') }}">
                    <i class="fas fa-users"></i> Nosotros
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home.help.indexhelp') }}">
                    <i class="fas fa-question-circle"></i> Ayuda
                </a>
            </li>
            

              <li class="nav-item">
                <a class="nav-link" href="{{ route('home.blogs.indexblog') }}">
                  <i class="fas fa-newspaper"></i> Blog
                </a>
              </li>

{{-- admin,user, salir botones --}}

<!-- Authentication -->
        @can('admin.home')
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin') }}">
              <i class="fas fa-newspaper"></i> 
              {{$navbarConfig->boton1}}
            </a>
          </li>
        @endcan
<!-- Authentication -->

{{-- categorias --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-tags"></i> Categorías
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        @foreach ($categories as $category)
            <li><a class="dropdown-item" href="{{ route('home.category.show', $category->slug) }}">{{$category->name}}</a></li>
        @endforeach
        </ul>
    </li>
    

{{-- categorias --}}

   {{-- if endif/ auth else endauth/ if endif --}}
   @if (Route::has('login'))

   @auth


{{-- Admin boton impersonate --}}
        @if (session('impersonated_by'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('impersonate.stop')}}">
                <i class="fas fa-newspaper"></i> AdminVolver->
                </a>
            </li>
        @endif
{{-- Admin boton impersonate --}}

    @else
    {{-- no registrado se muestra esto --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/login') }}">
            <i class="fas fa-user"></i> {{$navbarConfig->boton2}}
            </a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/register') }}">
            <i class="fas fa-users"></i> {{$navbarConfig->boton4}}
            </a>
        </li>
        @endif
    @endauth

    @endif
</ul>
    {{-- boton lado izquierda  --}}
