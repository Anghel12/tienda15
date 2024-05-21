@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif



    @include('admin.profile.partials.main_profile_user') 

{{-- @foreach ($profiles as $profile)
    <h3>{{ $profile->titulo }}</h3>
    <p>{{ $profile->biografia }}</p>
    <a href="{{ route('admin.profile.show', $profile->user_id) }}">Ver perfil</a>
    <!-- Mostrar otros detalles del perfil -->
@endforeach --}}




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

        <!-- Main css -->
        <link rel="stylesheet" href="{{ asset('css/styleAdmin.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
