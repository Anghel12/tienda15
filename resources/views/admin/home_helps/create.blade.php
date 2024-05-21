@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crea tu Home Helps </h1>
    <a href="{{ route('admin.home_helps.index') }}" class="btn btn-primary">Volver</a>
        {{-- alerta --}}
        @if (session('info'))
        <div class="alert alert-success">
             <strong> {{session('info')}} </strong>
        </div>
        @endif
@stop

@section('content')
 

    
<div class="card">
    <div class="card-body">
        {!! Form::open( ['route' => 'admin.home_helps.store']) !!}

        @include('admin.home_helps.partials.form')
        

        {!! Form::submit('crear help', ['class' => 'btn btn-primary']) !!}
        
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
    <script src="https://cdn.ckeditor.com/ckeditor5/35.2.0/classic/ckeditor.js"></script>

    <script>


    $('#usersTable').DataTable({
        responsive: true,
        autoWitdth: false
    });

        </script>

<script>
    ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@stop