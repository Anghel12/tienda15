

<div class="form-group">
    {!! Form::label('title', 'Titulo') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'ingrese el Titulo de la ayuda']) !!}

    @error('title')
    <span class="text-danger"> {{$message}} </span>
@enderror  
</div>

<div class="form-group">
    {!! Form::label('body', 'Cuerpo') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Cuerpo de la ayuda']) !!}

    @error('body')
        <span class="text-danger"> {!! $message !!} </span>
    @enderror
</div>

