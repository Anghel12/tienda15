<td>
    <div class="form-group">
        {!! Form::label('category_id', 'Categoria') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control' ]) !!}
        
        @error('category_id')
        <span class="text-danger"> {{$message}} </span>
    @enderror  
    </div>
</td>
<td> 
    <div class="form-group">
        {!! Form::label('title', 'Titulo') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre de la Categoria']) !!}

    @error('title')
    <span class="text-danger"> {{$message}} </span>
    @enderror  
    </div> 
</td>
<td>    
     <div class="form-group">

    {!! Form::text('extract', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre de la Categoria']) !!}

    @error('extract')
    <span class="text-danger"> {{$message}} </span>
    @enderror  
    </div> 
 </td>