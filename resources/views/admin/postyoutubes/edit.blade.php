@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>EDIT</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif

<div class="card">
    <form method="POST" action="/image/upload" enctype="multipart/form-data">
        @csrf
        <textarea id="editor1" name="content"></textarea>
    </form>
    
    <div class="card-body">
        {!! Form::model($postyoutube, ['route' => ['admin.postyoutubes.update', $postyoutube], 'autocomplete' => 'off', 'files' => true, 'method' => 'PUT']) !!}

        {!! Form::hidden('user_id', auth()->user()->id) !!}
        

        @include('admin.postyoutubes.partials.form') 

        

        {!! Form::submit('Actualizar post', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.2.0/classic/ckeditor.js"></script>

    <script src=" {{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}} "></script>

   <script>
     $(document).ready( function() {
        $("#name").stringToSlug({
          setEvents: 'keyup keydown blur',
          getPut: '#slug',
          space: '-'
        });
      });
   </script>
   

<script>

        ClassicEditor.create(document.querySelector('#extract'), {
    toolbar: [
        // ...
        'imageUpload'
    ],
    // Configura la URL del punto final de carga de imágenes en tu controlador
    image: {
        upload: {
            url: '/images/posts'
        }
    }
})
    .catch(error => {
        console.error(error);
    });

</script>

<script>
    ClassicEditor
        .create(document.querySelector('#extract'), {
            extraPlugins: [Image, YoutubeEmbed],
            toolbar: [
                'heading',
                '|',
                'bold',
                'italic',
                'link',
                'bulletedList',
                'numberedList',
                '|',
                'imageUpload',
                'youtubeEmbed'
            ],
            image: {
                toolbar: ['imageTextAlternative', '|', 'imageStyle:alignLeft', 'imageStyle:full', 'imageStyle:alignRight'],
                upload: {
                    // Configura la URL del punto final de carga de imágenes en tu servidor
                    // Ejemplo: '/upload-image-endpoint'
                    // Asegúrate de configurar este punto final en tu servidor
                    // para manejar la carga y almacenamiento de imágenes.
                    // Puedes agregar otros parámetros según sea necesario.
                    url: '/upload-image-endpoint',
                    headers: {
                        'X-CSRF-TOKEN': 'El valor de tu token CSRF si es necesario',
                    }
                }
            },
            youtubeEmbed: {
                toolbar: ['youtubeEmbed']
            }
        })
        .catch(error => {
            console.error(error);
        });
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '#iframe' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    ClassicEditor.create(document.querySelector('#editor1'), {
     ckfinder: {
         uploadUrl: "{{ route('image.upload') }}",
         options: {
            requestType: 'post'
         }
     }
 })
     .then(editor => {
         console.log('Editor was initialized', editor);
     })
     .catch(error => {
         console.error(error.stack);
     });
 </script>


 


<script>  
    document.getElementById("file").addEventListener('change', cambiarImagen);
          function cambiarImagen(event){
           var file = event.target.files[0];
           var reader = new FileReader();
           reader.onload = (event) => {
               document.getElementById("picture").setAttribute('src', event.target.result);
           };
           reader.readAsDataURL(file);
          }
       </script>
@stop