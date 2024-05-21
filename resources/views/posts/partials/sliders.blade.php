<div class="container">
    <div class="row">
      <div class="col-sm-12">
      <div class="card">
   
        <div id="carouselExampleControlsNoTouching" class="carousel slider" data-bs-touch="false" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-inner">
        @forelse($sliders as $slider) 

        <div class="carousel-item @if($loop->index==0) active @endif"> 
  
            @if($slider->image)
              
              {{--     <img src="{{$slider->image->url}}" class="d-block w-100" alt="...">  --}}
              <img src="{{Storage::url($slider->image->url)}}" class="d-block w-100" alt="..." style="height: 30rem;">
                      
               @else
                <img src="https://cdn.pixabay.com/photo/2022/09/04/12/24/hippos-7431581_960_720.jpg" class="d-block w-100" alt="...">
             @endif 
      
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-primary">{{$slider->title}}</h5>
                <p class="text-secondary">{{$slider->body}}</p>
              </div>
            </div>
            @empty
            
            @endforelse
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  </div>
  </div>
  </div>