

        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre de la Categoria']) !!}
        
            @error('name')
            <span class="text-danger"> {{$message}} </span>
        @enderror  
        </div>
        <div class="form-group">
            <p class="font-weight-bold">Etiquetas</p>
            <div class="form-check">
            @foreach ($sub_categories as $item)
                <label for="mr-2">
        
                    {!! Form::checkbox('sub_categories[]', $item->id, null) !!}
                    {{$item->title}}
        
                </label>
            @endforeach
        </div>
        
            @error('tags')
            <hr>
            <span class="text-danger"> {{$message}} </span>
            @enderror 
        </div> 

        <div class="form-group">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre de EL SLUG', 'readonly']) !!}
        
            @error('slug')
                <span class="text-danger"> {{$message}} </span>
            @enderror     
        </div>
