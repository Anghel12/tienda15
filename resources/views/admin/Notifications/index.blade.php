@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ordenes</h1>
@stop

@section('content')
    <div class="container">
        <h1>Notificaciones</h1>
        <hr>

        @if($notifications->count() > 0)
            <ul class="list-group">
                @foreach($notifications as $notification)
                    <li class="list-group-item">
                        {!! $notification->data['message'] !!}
                        <span class="float-right">{{ $notification->created_at->diffForHumans() }}</span>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No tienes notificaciones.</p>
        @endif
    </div>
@endsection
