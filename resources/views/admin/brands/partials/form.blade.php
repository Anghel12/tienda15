<table id="myTable" class="table table-striped">
    <nav class="navbar navbar-dark navbar-expand-lg bg-light">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <div class="shrink-0 mr-3" >
                 
         <img class="h-10 w-10 rounded-full object-cover" style="max-height: 40px;" src="{{$brand->user->profile_photo_url}}" alt="" />
            
            </div>
          </li>
          <li class="nav-item"> 
            <p> CREADO POR EL USUARIO: {{$brand->user->name}}  </p> 
        </li>
           
     </ul>
     </nav> 
    <tbody>

        <tr>
          <td>
            {!! Form::label('id', 'ID') !!}
            <h5> {{$brand->id}} </h5>
          </td>
           
            <td> 
               <div class="form-group">
                {!! Form::label('title', 'NOMBRE DE LA MARCA') !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Post']) !!}
            
                @error('title')
                <span class="text-danger"> {{$message}} </span>
               @enderror  
            
            </div>
        </td>
            <td>
               <div class="form-group">
                {!! Form::label('extract', 'EXTRACTO') !!}
              {!! Form::text('extract', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Post']) !!}
          
              @error('extract')
              <span class="text-danger"> {{$message}} </span>
             @enderror  
          
          </div>
        </td>
  
        </tr>
  
    
       
    </tbody>
  </table>
  
  <div class="form-group">
    {!! Form::label('slug', 'URL QUE SE MOSTRAR AL VER EL POST:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del Post', 'readonly']) !!}
    @error('slug')
    <span class="text-danger"> {{$message}} </span>
  @enderror  
  
  </div>
  
  
  
  {{--         @isset($provider->iframe)
  
            {!! Form::label('iframe', 'VIDEO INSERTA IFRAME') !!}
            
            {!! Form::textarea('iframe', null, ['class' => '']) !!}
        
            @error('body')
            <span class="text-danger"> {{$message}} </span>
            @enderror  
    
        
              @else
      
  
              <img id="picture" src="{{Storage::url($postyoutube->image->url)}}">
              <img id="picture" src="{{$postyoutube->image->url}}">
          @endisset 
   --}}
  
            
  
  
  
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
  