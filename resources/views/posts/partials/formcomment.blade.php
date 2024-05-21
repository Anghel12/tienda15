{{--         {!! Form::hidden('commentable_id', $post->id) !!}  
        {!! Form::hidden('commentable_type', 'App\Models\Post') !!} 
              
     --}}
        {!! Form::text('mensaje', null, ['class' => 'form-control', 'placeholder' => 'Escribe un comentario']) !!}
        @error('mensaje')
        <span class="text-danger"> {{$message}} </span>
       @enderror  

      