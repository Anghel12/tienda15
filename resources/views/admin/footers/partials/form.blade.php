<H3 class="text-center p-3">EDITAR FOOTER HOME</H3>
<!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <h2 class="p-4">
        <h1>    TITULO  </h1> 
          <div class="form">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
      </div>   
    </h2>
        @error('title')
        <span class="text-danger"> {{$message}} </span>
        @enderror  
    
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        @foreach($footer->other_pageable as $item)

        <a class="btn btn-outline-light btn-floating m-1" href="{{$item->url}}" role="button"
        ><i class="fab fa-twitter"></i></a>
        @endforeach
      </section>
      <!-- Section: Social media -->
  
      <!-- Section: Text -->
      <section class="mb-4">
        <div class="form-group">
          <p>descripcion</p>
        {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
    
        @error('descripcion')
        <span class="text-danger"> {{$message}} </span>
        @enderror  
     </div>  
      </section>
      <!-- Section: Text -->
  
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">  </h5>
              <div class="form-group">
              <p>title1</p>
            {!! Form::text('title1', null, ['class' => 'form-control']) !!}
        
            @error('title1')
            <span class="text-danger"> {{$message}} </span>
            @enderror  
         </div>  
       
  
            <ul class="list-unstyled mb-0">
              @foreach($footer->other_pageable as $item)
              <li>
                <a href="{{$item->url}}" class="text-white">{{$item->titulo}}</a>
              </li>

              @endforeach

            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase"> </h5>
              
            <div class="form-group">
                <p>title2</p>
              {!! Form::text('title2', null, ['class' => 'form-control']) !!}
          
              @error('title2')
              <span class="text-danger"> {{$message}} </span>
              @enderror  
           </div>  
            
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Link 1</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 2</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 3</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 4</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase"> </h5>
              <div class="form-group">
                <p>title3</p>
              {!! Form::text('title3', null, ['class' => 'form-control']) !!}
          
              @error('title3')
              <span class="text-danger"> {{$message}} </span>
              @enderror  
           </div>  
           
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Link 1</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 2</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 3</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 4</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase"></h5>
              <div class="form-group">
                <p>title4</p>
              {!! Form::text('title4', null, ['class' => 'form-control']) !!}
          
              @error('title4')
              <span class="text-danger"> {{$message}} </span>
              @enderror  
           </div>
          
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Link 1</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 2</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 3</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 4</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      <div class="form-group">
        <p>copiright</p>
      {!! Form::text('copyright', null, ['class' => 'form-control']) !!}

      @error('copyright')
      <span class="text-danger"> {{$message}} </span>
      @enderror  

   </div>  
    </div>
    <!-- Copyright -->
   {{--  @endforeach  --}}
       
  </footer>
  <!-- Footer -->