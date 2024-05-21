
    {{-- form  --}}
<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-input', 'placeholder' => 'Ingrese el nombre del Post']) !!}

    @error('name')
    <span class="text-danger"> {{$message}} </span>
@enderror  
</div>
{{-- slug oculto --}}
{!! Form::label('slug', 'Slug:') !!}
{!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del Post', 'readonly']) !!}
@error('slug')
<span class="text-danger"> {{$message}} </span>
@enderror  



<div class="form-group">

    {!! Form::label('brand_id', 'brand') !!}

    {!! Form::select('brand_id', $brands, null, ['class' => 'form-input' ]) !!}

    @error('brand_id')
    <span class="text-danger"> {{$message}} </span>
    @enderror  
    </div>


<div class="form-group">
    {!! Form::label('category_id', 'Categoria') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-input' ]) !!}
    
    @error('category_id')
    <span class="text-danger"> {{$message}} </span>
@enderror  
</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>

    @foreach ($tags as $tag)
        <label for="mr-2">

            {!! Form::checkbox('tags[]', $tag->id, null, ['class' => 'agree-term' ]) !!}
            {{$tag->name}}

        </label>
    @endforeach
       

    @error('tags')
    <hr>
    <span class="text-danger"> {{$message}} </span>
    @enderror 
</div>

<div class="form-group">
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
</div>

<div class="row">
    <div class="col">
        <div class="image-wrapper">
            @isset($post->images)
                @foreach ($post->images as $image)
                    <img class="minimal-img" id="picture" src="{{ Storage::url($image->url) }}">
                @endforeach
            @else
                <img class="minimal-img" id="picture" src="https://cdn.pixabay.com/photo/2022/09/04/12/24/hippos-7431581_960_720.jpg">
            @endisset
        </div>
    </div>

    <div class="col">
        <div class="form-group">
            {!! Form::label('files', 'Imágenes que se mostrarán en el post') !!}
            {!! Form::file('files[]', ['class' =>'minimal-img', 'accept' => 'image/*', 'multiple' => true]) !!}
        </div>
        @error('files')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
{{-- dropzone aun no funciona godddd imagenes --}}
{{-- <div class="row">
    <div class="col">
        <div class="form-group">
            {!! Form::label('files', 'Imágenes que se mostrarán en el post') !!}
            <!-- Dropzone -->
            <div id="dropzone" class="dropzone"></div>
        </div>
        @error('files')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
 --}}


<div class="form-group">
    {!! Form::label('extract', 'Extracto:') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-input']) !!}

    @error('extract')
    <span class="text-danger"> {{$message}} </span>
    @enderror  

</div>

<div class="form-group">
    {!! Form::label('body', 'Cuerpo del post:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-input']) !!}

    @error('body')
    <span class="text-danger"> {{$message}} </span>
    @enderror  
</div>

<div class="form-group">
    {!! Form::label('price_reciente', 'Producto Precio: $.') !!}
    @isset($post->price_reciente)

    {!! Form::text('price_reciente', $post->price_reciente, ['class' => 'form-input']) !!}

    @else
    {!! Form::text('price_reciente', null, ['class' => 'form-input']) !!}
     @endisset
    

@error('price_reciente')
<span class="text-danger"> {{$message}} </span>
@enderror  
</div>