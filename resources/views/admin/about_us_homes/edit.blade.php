@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Sobre Nosotros</h1>
    <a class="btn btn-success btn-sm float-right" href="{{route('admin.about_us_homes.index')}}">Volver</a>
    
@stop

@section('content')
 

<div class="card">
    <div class="card-body">
        {!! Form::model($aboutUsHome, ['route' => ['admin.about_us_homes.update', $aboutUsHome], 'method' => 'PUT' ]) !!}

        @include('admin.about_us_homes.partials.form')
        {!! Form::submit('EDITAR categoria', ['class' => 'btn btn-primary']) !!}
        
        {!! Form::close() !!}

    </div>
</div>

@endsection

@section('css')
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}


<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/css/admin_custom.css"> 
@stop

@section('js')

    <script> console.log('Hi!'); </script>
   {{--  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> --}}
  
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src=" {{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}} "></script>

    <script>
    $('#myTable').DataTable({
        responsive: true,
        autoWitdth: false
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