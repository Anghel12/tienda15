
<div class="mb-20"></div>
<h1 class="text-style text-center p-2 mb-10">VIDEOS</h1>
@foreach ($postyoutubes as $postyoutube)
<div class="container p-4 shadow mb-20 bg-light">
<div class="row g-0  position-relative">
    <div class="col-md-9 mb-md-0 ">
      <iframe width="90%" height="100%" src="https://www.youtube.com/embed/Nn65oL7OuzY?si=hgd23TVGWOfnVbrp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  
    </div>


    <div class="col-md-3 ps-md-0">
      <nav class="navbar navbar-dark navbar-expand-lg bg-light">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <div class="shrink-0 mr-3" >
                 
         <img class="h-10 w-10 rounded-full object-cover" style="max-height: 50px;" src="{{$postyoutube->user->profile_photo_url}}" alt="" /> 
            </div>
          </li>
          <li class="nav-item">
            <p> Nombre: {{$postyoutube->user->name}}  </p> 
        </li>
           
     </ul>
     </nav>
  
      <h5 class="mt-0">{{$postyoutube->name}}</h5>
      <p>{{!! $postyoutube->extract !!}}</p>
      <p href="#" class="stretched-link">{{!! $postyoutube->body !!}}</p>
      <a class="btn btn-success" href="{{ route('admin.postyoutubes.edit', $postyoutube) }}" > Editar </a>
    </div>
  </div>
</div>
@endforeach