@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
   
@stop

@section('content')
{!! Form::model($footer, ['route' => ['admin.footers.update', $footer], 'autocomplete' => 'off', 'files' => true, 'method' => 'PUT']) !!}

{!! Form::hidden('user_id', auth()->user()->id) !!}

@includeIf('admin.footers.partials.form')

<div class=" text-center p-2">
{!! Form::submit('EDITAR FOOTER', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}


  @stop

@section('css')
 <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> 



@stop

@section('js')

    <script> console.log('Hi!'); </script>


@stop