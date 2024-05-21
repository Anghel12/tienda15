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


{{-- 

   @livewire('admin.profile-index') --}}

   <div class="card">
    <h2>Info de el usuario navegador e ip </h2>
    <div>
        <div>
          
            @livewire('profile.logout-other-browser-sessions-form')

        </div>           
    </div>
    
   </div>

   <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-12 text-center">
                <p>Tu enlace de referidos es:</p>
                <h5></h5>
            </div>
        </div>
    
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="text-center">Estadísticas de referidos</h2>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Usuario que refirió</th>
                            <th>Usuario referido</th>
                            <th>Puntos ganados</th>
                        </tr>
                    </thead>
                    <tbody>
                    {{--     @foreach ($referralall as $referralone)
                            <tr>
                                <td>{{ $referralone->user->name }}</td>
                                <td>{{ $referralone->referredUser->name }}</td>
                                <td>{{ $referralone->points }}</td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/styleAdmin.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
