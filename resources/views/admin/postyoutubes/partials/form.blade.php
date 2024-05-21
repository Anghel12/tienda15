
<div class="form-group">
  {!! Form::label('extract', 'Extracto:') !!}
  {!! Form::textarea('extract', null, ['class' => 'form-control', 'id' => 'extract', 'contenteditable' => 'true']) !!}
          
  @error('extract')
  <span class="text-danger"> {{$message}} </span>
  @enderror  
</div>


<div class="card">
    <div>
    <div class="row g-0" style="max-width: 100%;">
      <div class="col-md-7" id="iframe">

        @isset($postyoutube->iframe)

          {!! Form::label('iframe', 'VIDEO INSERTA IFRAME') !!}
          
          {!! Form::textarea('iframe', null, ['class' => '']) !!}
      
          @error('body')
          <span class="text-danger"> {{$message}} </span>
          @enderror  
  
      
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

          <h5 class="card-text">
            <div class="form-group">
                {!! Form::label('name', 'Titulo:') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Post']) !!}
            
                @error('name')
                <span class="text-danger"> {{$message}} </span>
            @enderror  
            
            </div>
          </h5>
          <p class="card-text">
            <div class="form-group">
              {!! Form::label('extract1', 'Extracto:') !!}
              {!! Form::textarea('extract', null, ['class' => 'form-control', 'id' => 'extract', 'contenteditable' => 'true']) !!}
                      
              @error('extract')
              <span class="text-danger"> {{$message}} </span>
              @enderror  
          </div>
          
          <button id="insert-image" type="button">Insertar imagen</button>
        </p>
          <p class="card-text"><small class="text-muted">
            <div class="form-group">
                {!! Form::label('body', 'Cuerpo del post:') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
            
                @error('body')
                <span class="text-danger"> {{$message}} </span>
                @enderror  
            </div>
        </small>
        </p>

            <div class="form-group">
                {!! Form::label('price', 'PRECIO:') !!}
                {!! Form::number('price', null, ['class' => 'form-control']) !!}
            
                @error('price')
                <span class="text-danger"> {{$message}} </span>
                @enderror  
            </div>
        </small>


        </div>
      </div>
    </div>
  </div>
</div>




<div class="form-group">
    {!! Form::label('slug', 'URL QUE SE MOSTRAR AL VER EL POST:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del Post', 'readonly']) !!}
    @error('slug')
    <span class="text-danger"> {{$message}} </span>
@enderror  

</div>


{{-- <div class="form-group">
    <p class="font-weight-bold">Estado</p>

    <label for="">
        {!! Form::radio('status', 1, ) !!}
        Borrador
    </label>

    <label for="">
        {!! Form::radio('status', 2, true) !!}
        Publicado
    </label>


    @error('status')
    <hr>
    <span class="text-danger"> {{$message}} </span>
    @enderror 
</div> --}}
