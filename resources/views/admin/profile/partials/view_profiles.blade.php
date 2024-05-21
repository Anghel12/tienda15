<style>

    .swiper-container {
      height: 100vh;
    }
  
    .swiper-slide img {
      object-fit: fill;
      width: 100%;
      height: 100%;
    }
  
    .btn-danger {
      background-color: #dc3545;
      border-color: #dc3545;
    }
    .mb-20{
      margin-bottom: 5rem;
    }
  </style>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <div class="container text-center mb-20">
        <h1 class="mb-10">
            Personas que quizá conozcas
        </h1>
        <div class="row g-2 g-lg-3">
      
        <!-- Swiper -->
        <div class="swiper categoriesSwiper">
          <div class="swiper-wrapper">
           
              @foreach ($profiles as $profile)
               
            <div class="swiper-slide">
                
            <div class="card-group p-2" >
              <div class="card" style="height: 200px;">
                      <div class="card-body">
                        <a href="{{ route('admin.profile.show', $profile->user_id) }}">         
                            <div class="shrink-0 mr-3">
                        
                                <img class="h-10 w-10 rounded-full object-cover" src="{{ $profile->user->profile_photo_url }}" alt="{{ $user->name }}" style="border-radius: 50%; width: 50px; height: 50x;"/>
                            </div>
                           </a> 
                           <div class="">
                          <a class="link" href="{{route('admin.profile.show', $profile->user_id)}}"> 
                              <h5 class="card-title">E: {{$profile->user->name}}</h5>
                          </a>
              
                          <p class="">{{$profile->id}}</p>
                             {{-- seguir a un usuario --}}
                        @if (!$user->isFollowedBy(auth()->user()) && $user->id !== auth()->user()->id)
                        <form action="{{ route('admin.users.follow', $user) }}" method="POST">
                            @csrf
                            <p><button type="submit">Seguir</button></p>
                            
                        </form>
                        @elseif ($user->id !== auth()->user()->id)
                            <form action="{{ route('admin.users.unfollow', $user) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Dejar de seguir</button>
                            </form>
                        @endif
                    
                          </div>
              
                      </div>
                    </div>
                  </div>
                  </div>
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
      
      </div>
      </div>
      
      <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
      <script>
          var swiper = new Swiper('.categoriesSwiper', {
            slidesPerView: 4,
            grabCursor: true,
            pagination: {
              el: '.swiper-pagination',
              clickable: true,
            },
            breakpoints: {
              "@0.00": {
                slidesPerView: 1,
              },
              "@0.75": {
                slidesPerView: 3,
              },
              "@1.00": {
                slidesPerView: 4,
              },
              "@1.50": {
                slidesPerView: 6,
              },
            },
          });
      </script>

 