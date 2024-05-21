

<div class="form-group">
    {!! Form::label('title', 'Titulo') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre de la Categoria']) !!}

    @error('title')
    <span class="text-danger"> {{$message}} </span>
@enderror  
</div>


<div class="form-group">
    {!! Form::label('body', 'Cuerpo') !!}
    {!! Form::text('body', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre de EL SLUG', 'readonly']) !!}

    @error('body')
        <span class="text-danger"> {{$message}} </span>
    @enderror     
</div>

<div class="row">
    <div class="col">
        <div class="image-wrapper">
            @isset($post->images)

                <img class="minimal-img" id="picture" src="{{Storage::url($post->images->url)}}">
                <img class="minimal-img" id="picture" src="{{$post->images->url}}">
            
            @else

            <img class="minimal-img" id="picture" src="https://cdn.pixabay.com/photo/2022/09/04/12/24/hippos-7431581_960_720.jpg">

             @endisset
            
        </div>
    </div>

    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrara en el post') !!}
            {!! Form::file('file', ['class' =>'minimal-img', 'accept' => 'image/*']) !!}
        </div>
    </div>

    @error('file')
    <hr>
    <span class="text-danger"> {{$message}} </span>
    @enderror 

</div>
