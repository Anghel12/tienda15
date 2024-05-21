


 
    @foreach ($postyoutubes as $postyoutube)

        <div class="card">
            <div>
            <div class="row g-7" style="max-width: 100%;">
            <div class="col-md-6 p-2">

              @isset($postyoutube->iframe)
              {{$postyoutube->iframe}}
              @else
      
              <img id="picture" src="{{Storage::url($postyoutube->image->url)}}">
              <img id="picture" src="{{$postyoutube->image->url}}">
          @endisset 

        
            
            </div>
              <div class="col-md-5">
                <div class="card-body">
                    
            <nav class="navbar navbar-dark navbar-expand-lg bg-light">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <div class="shrink-0 mr-3" >
                     
             <img class="h-10 w-10 rounded-full object-cover" style="max-height: 40px;" src="{{$postyoutube->user->profile_photo_url}}" alt="" />
                
                </div>
              </li>
              <li class="nav-item">
                <p> Nombre: {{$postyoutube->user->name}}  </p> 
            </li>
               
         </ul>
         </nav>
                  <h5 class="card-title">{{$postyoutube->name}}</h5>
                  <p class="card-text">{{!! $postyoutube->extract !!}}</p>
                  <p class="card-text"><small class="text-muted">{{!! $postyoutube->body !!}}</small></p>
    
                    <a class="btn btn-success" href="{{ route('admin.postyoutubes.edit', $postyoutube) }}" > Editar </a>
        
                
                </div>
              </div>
            </div>
          </div>
        </div>

        @endforeach


{{-- <div class="row">
        @foreach ($postyoutubes as $postyoutube)
    <div class="col-sm-3 p-2">
  
  
        <div class="card max-width: 400px;">
            <div class="card-header">
        
             <p>Autor: {{$postyoutube->user->name}}</p> 
         
             <p>Estatus: {{$postyoutube->status}} </p>
             <p>id: {{$postyoutube->id}} </p>
  
                <a href=" ">
                    <h5 class="card-title text-truncate" style="max-width: 280px;" >Nombre del Post:{{$postyoutube->name}}</h5>
                </a>
             
            </div>
  
            @if($postyoutube->image)
            <a href="">
            <img src="{{$postyoutube->image->url}}" class="card-img-top" alt="...">
            <img src="{{Storage::url($postyoutube->image->url)}}" class="card-img-top" alt="...">
          </a>
            @else
            <a href="">
            <img src="https://cdn.pixabay.com/photo/2022/09/04/12/24/hippos-7431581_960_720.jpg" class="card-img-top" alt="...">
          </a>
            @endif
  
  
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text text-truncate" style="max-width: 400px;">{{!! $postyoutube->body !!}}</p>
            <p class="card-text text-truncate" style="max-width: 400px;">{{!! $postyoutube->extract !!}} </p>
  
            <h4>
                PRECIO: ${{$postyoutube->price}}
            </h4>
            
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
            
        </div>
     </div>
  
          @endforeach
       
  </div> --}}

