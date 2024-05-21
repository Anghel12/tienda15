 {{-- lado derecho --}}

 
 <style>
  .dropdown-menu {
    min-width: 384px !important;
   
  }
  
   .banner-img{
     height: 120px;
  
    }
  
</style>

<!-- Iconos de corazón, carrito, configuración y notificaciones -->
{{-- comprar monedas --}}
<ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center">

  <li class="nav-item dropdown">

    <a class="nav-link px-2 icon-indicator icon-indicator-sm icon-indicator-danger" id="navbarDropdownUser" href="products-filter.html#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-coins "></i>

    </a>
  
    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300 mt-2" aria-labelledby="navbarDropdownUser">
      <div class="card position-relative border-0">
   
        <div class="card-body p-0">
          <div class="text-center pt-4 pb-3">
  
   
            <div class="avatar avatar-xl ">
              {{-- moneda img --}}
              <img class="rounded-circle " src="#" alt="" />
            </div>
      
  
            <h6 class="mt-2 text-black">{{$coin->name}}</a></h6>
          </div>
        </div>
     
        <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read border-bottom">
          <div class="d-flex align-items-center justify-content-between position-relative">
            <div class="d-flex">
              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../../../assets/img/team/40x40/30.webp" alt="" /></div>
              <div class="flex-1 me-sm-3">
                <h4 class="fs--1 text-black">Jessie Samson</h4>
                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span class="ms-2 text-400 fw-bold fs--2">10m</span></p>
                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
              </div>
            </div>
            <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="products-filter.html#!">Mark as unread</a></div>
            </div>
          </div>
        </div>
     
        <div class="card-footer p-0 border-top">
          <hr />
         
          <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="{{ route('login') }}"> <span class="me-2" data-feather="log-out"> </span>Comprar coins</a></div>
      </div>
     
      </div>
    </div>
  </li>


{{-- favoritos --}}
@auth
    

      <li class="nav-item position-relative me-3">
        <a class="nav-link" href="{{ route('admin.favorites.index') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-heart"></i>
          @auth

          @if($favoritesCount > 0)
            <span class="badge badge-primary badge-counter position-absolute top-0 start-100 translate-middle badge-circle">
              {{ $favoritesCount }}
            </span>
          @endif

          @endauth
        </a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="left: -350px; top: 40px;">
            <div class="card">
              <p>corazon</p>
            </div>
          </div>  
      </li>
      @endauth
{{-- favoritos --}}


@if (\Cart::content()->count())

      <li class="nav-item position-relative me-3">
      
      <a href="/vercarrito" class="nav-link"> 
        <i class="fas fa-shopping-cart"></i>
        @if (\Cart::content()->count())
        <span class="badge badge-primary badge-counter position-absolute top-0 start-100 translate-middle badge-circle">
          {{ Cart::content()->count()}}
        </span>
    @endif
      </a>
    </li>
  @endif

{{-- carrito --}}
{{-- @if (\Cart::content()->count())

      <li class="nav-item position-relative me-3">
        <a class="nav-link" href="/vercarrito" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-shopping-cart"></i>
      @if (\Cart::content()->count())
          <span class="badge badge-primary badge-counter position-absolute top-0 start-100 translate-middle badge-circle">
            {{ Cart::content()->count()}}
          </span>
      @endif
        </a>

        <div class="dropdown-menu col-12" aria-labelledby="navbarDropdown" style="left: -350px; top: 40px;">
          <div class="row">
            @foreach (Cart::content() as $item)
            <div class="col-md-6 m-2">
              @if($item->options->urlfoto)
               <img src="{{Storage::url($item->options->urlfoto)}}" class="banner-img" alt="...">
          @endif
            </div>
            <div class="col-md-5">
              <div class="card-body">
                <p class="card-title"><strong class="text-muted">NOMBRE: {{$item->name}}</strong></p>
                <p class="card-text"><small class="text-muted">PRECIO: {{$item->price}}</small></p>
              </div>
            </div>

            <p class="text-center"><a href="/vercarrito" class="btn btn-outline-success btn-sm">Ver el carrtio</a></p>
        @endforeach


        </div>
      </div>
  </li>
  @endif --}}

{{-- CONFIGURACION botones--}}


 {{-- alert --}}
<li class="nav-item dropdown">
  <a class="nav-link px-2 icon-indicator icon-indicator-sm icon-indicator-danger" id="navbarTopDropdownNotification" href="products-filter.html#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
  <i class="fas fa-bell text-700" style="height:20px;width:20px;" data-feather="bell"></i>
  </a>
  <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret mt-2" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
    <div class="card position-relative border-0">
      <div class="card-header p-2">
        <div class="d-flex justify-content-between">
          <h5 class="text-black mb-0">Notificatons</h5><button class="btn btn-link p-0 fs--1 fw-normal" type="button">Mark all as read</button>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="scrollbar-overlay" style="height: 27rem;">
          <div class="border-300">
            <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read border-bottom">
              <div class="d-flex align-items-center justify-content-between position-relative">
                <div class="d-flex">
                  <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../../../assets/img/team/40x40/30.webp" alt="" /></div>
                  <div class="flex-1 me-sm-3">
                    <h4 class="fs--1 text-black">Jessie Samson</h4>
                    <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span class="ms-2 text-400 fw-bold fs--2">10m</span></p>
                    <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                  </div>
                </div>
                <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="products-filter.html#!">Mark as unread</a></div>
                </div>
              </div>
            </div>
            <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
              <div class="d-flex align-items-center justify-content-between position-relative">
                <div class="d-flex">
                  <div class="avatar avatar-m status-online me-3">
                    <div class="avatar-name rounded-circle"><span>J</span></div>
                  </div>
                  <div class="flex-1 me-sm-3">
                    <h4 class="fs--1 text-black">Jane Foster</h4>
                    <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>📅</span>Created an event.<span class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                    <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                  </div>
                </div>
                <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="products-filter.html#!">Mark as unread</a></div>
                </div>
              </div>
            </div>
            <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
              <div class="d-flex align-items-center justify-content-between position-relative">
                <div class="d-flex">
                  <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="../../../assets/img/team/40x40/avatar.webp" alt="" /></div>
                  <div class="flex-1 me-sm-3">
                    <h4 class="fs--1 text-black">Jessie Samson</h4>
                    <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked your comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span></p>
                    <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                  </div>
                </div>
                <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="products-filter.html#!">Mark as unread</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="border-300">
            <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
              <div class="d-flex align-items-center justify-content-between position-relative">
                <div class="d-flex">
                  <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../../../assets/img/team/40x40/57.webp" alt="" /></div>
                  <div class="flex-1 me-sm-3">
                    <h4 class="fs--1 text-black">Kiera Anderson</h4>
                    <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                    <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                  </div>
                </div>
                <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="products-filter.html#!">Mark as unread</a></div>
                </div>
              </div>
            </div>
            <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
              <div class="d-flex align-items-center justify-content-between position-relative">
                <div class="d-flex">
                  <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../../../assets/img/team/40x40/59.webp" alt="" /></div>
                  <div class="flex-1 me-sm-3">
                    <h4 class="fs--1 text-black">Herman Carter</h4>
                    <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👤</span>Tagged you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                    <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                  </div>
                </div>
                <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="products-filter.html#!">Mark as unread</a></div>
                </div>
              </div>
            </div>
            <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read ">
              <div class="d-flex align-items-center justify-content-between position-relative">
                <div class="d-flex">
                  <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../../../assets/img/team/40x40/58.webp" alt="" /></div>
                  <div class="flex-1 me-sm-3">
                    <h4 class="fs--1 text-black">Benjamin Button</h4>
                    <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked your comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                    <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                  </div>
                </div>
                <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="products-filter.html#!">Mark as unread</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer p-0 border-top border-0">
        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder" href="../../../pages/notifications.html">Notification history</a></div>
      </div>
    </div>
  </div>
</li>


<li class="nav-item dropdown">

  <a class="nav-link px-2 icon-indicator icon-indicator-sm icon-indicator-danger" id="navbarDropdownUser" href="products-filter.html#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
    @auth
      <img class="rounded-circle " src="{{auth()->user()->profile_photo_url}}" alt="" style="height: 25px;
      width: 25px;"> 
    @else
      <i class="fas fa-cog"></i>
    @endauth

  </a>

  <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300 mt-2" aria-labelledby="navbarDropdownUser">
    <div class="card position-relative border-0">
      @auth
      <div class="card-body p-0">
        <div class="text-center pt-4 pb-3">

          @auth
          <div class="avatar avatar-xl ">
            <img class="rounded-circle " src="{{auth()->user()->profile_photo_url}}" alt="" />
          </div>
          @endauth

          <h6 class="mt-2 text-black">{{ auth()->user()->name }}</a></h6>
        </div>
        <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
      </div>
   
      <div class="overflow-auto scrollbar" style="height: 10rem;">
        <ul class="nav d-flex flex-column mb-2 pb-1">
          <li class="nav-item"><a class="nav-link px-3" href="{{ url('/admin/profile') }}"> <span class="me-2 text-900" data-feather="user"></span><span>Profile</span></a></li>
          <li class="nav-item"><a class="nav-link px-3" href="{{ url('/admin/dashboard') }}"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
          <li class="nav-item"><a class="nav-link px-3" href="{{ url('/admin/profile') }}"> <span class="me-2 text-900" data-feather="lock"></span>Posts &amp; Activity</a></li>
          <li class="nav-item"><a class="nav-link px-3" href="{{ url('/admin/about_us_homes') }}"> <span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy </a></li>
          <li class="nav-item"><a class="nav-link px-3" href="{{ url('/admin/about_us_homes') }}"> <span class="me-2 text-900" data-feather="help-circle"></span>Help Center</a></li>
          <li class="nav-item"><a class="nav-link px-3" href="{{ url('/admin/about_us_homes') }}"> <span class="me-2 text-900" data-feather="globe"></span>Language</a></li>
        </ul>
      </div>
      <div class="card-footer p-0 border-top">
        <hr />
       
        <div class="px-3"> 
          <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf
            <button class="btn btn-phoenix-secondary d-flex flex-center w-100" type="submit"><span class="me-2" data-feather="log-out"> </span>logout</button>

        </form>
        </div>
    </div>
      @else
      <div class="card-body p-0">
        <div class="text-center pt-4 pb-3">
          <div class="avatar avatar-xl ">
            <img class="rounded-circle " src="../../../assets/img/team/72x72/57.webp" alt="" />
          </div>
          <h6 class="mt-2 text-black">Name tienda</a></h6>
        </div>
      </div>

      <div class="card-footer p-0 border-top">
        <hr />
       
        <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="{{ route('login') }}"> <span class="me-2" data-feather="log-out"> </span>Login</a></div>
        <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="{{ route('register') }}"> <span class="me-2" data-feather="log-out"> </span>Registro</a></div>
    
        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="{{ route('admin.reports.create') }}">Privacy policy</a>&bull;<a class="text-600 mx-1" href="products-filter.html#!">Terms</a>&bull;<a class="text-600 ms-1" href="products-filter.html#!">Cookies</a></div>
      </div>
      @endauth
    </div>
  </div>
</li>
</ul>