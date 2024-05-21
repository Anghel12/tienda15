<x-app-layout>
    @extends('adminlte::auth.auth-page', ['auth_type' => 'login'])

@section('adminlte_css_pre')
    <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@stop

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )
@php( $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? route($password_reset_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? url($password_reset_url) : '' )
@endif

@section('auth_header', __('adminlte::adminlte.login_message'))

@section('auth_body')
    <form action="{{ $login_url }}" method="post">
        @csrf

        {{-- Email field --}}
        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                   value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" autofocus>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Password field --}}
        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                   placeholder="{{ __('adminlte::adminlte.password') }}">

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Login field --}}
        <div class="row">
            <div class="col-7">
                <div class="icheck-primary" title="{{ __('adminlte::adminlte.remember_me_hint') }}">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label for="remember">
                        {{ __('adminlte::adminlte.remember_me') }}
                    </label>
                </div>
            </div>

            <div class="col-5">
                <button type=submit class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
                    <span class="fas fa-sign-in-alt"></span>
                    {{ __('adminlte::adminlte.sign_in') }}
                </button>
            </div>
        </div>

    </form>
     {{-- apis de las aplicaciones para registrarse --}}
     <div class="social-auth-links text-center mb-3">
        <p>- O -</p>
        <a href="{{route('facebook-auth')}}" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i>
            Entrar con Facebook
        </a>
    </div>

    <div class="social-auth-links text-center">
        <a href="{{route('google-auth')}}" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i>
            Entrar con Gmail
        </a>
    </div>
@stop

@section('auth_footer')
    {{-- Password reset link --}}
    @if($password_reset_url)
        <p class="my-0">
            <a href="{{ $password_reset_url }}">
                {{ __('adminlte::adminlte.i_forgot_my_password') }}
            </a>
        </p>
    @endif

    {{-- Register link --}}
    @if($register_url)
        <p class="my-0">
            <a href="{{ $register_url }}">
                {{ __('adminlte::adminlte.register_a_new_membership') }}
            </a>
        </p>
    @endif
@stop
</x-app-layout>


{{-- login bonito  --}}

<div class="main">
    <section class="signup">
        <!-- <img src="images/signup-bg.jpg" alt=""> -->
        <div class="container">
            <div class="signup-content">
                <form action="{{ $login_url }}" method="POST" id="signup-form" class="signup-form">
                    @csrf
                    <h2 class="form-title"><a href="{{ url('/') }}">x</a>Login</h2>

                    {{-- form  --}}
                    <div class="form-group">
                        <input type="email" name="email" id="email"  class="form-input @error('email') is-invalid @enderror"
                        value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" autofocus>
                       
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-input @error('password') is-invalid @enderror"
                        placeholder="{{ __('adminlte::adminlte.password') }}">
    
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{--  falta poner recordar contraseña--}}
  
                    <div class="col-7">
                        <div class="icheck-primary" title="{{ __('adminlte::adminlte.remember_me_hint') }}">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                            <label for="remember">
                                {{ __('adminlte::adminlte.remember_me') }}
                            </label>
                        </div>
                    </div>
            
                        <div class="form-group">
                            <button type="submit" name="submit" id="submit" class="form-submit {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
                                <span class="fas fa-sign-in-alt"></span>
                                {{ __('adminlte::adminlte.sign_in') }}
                            </button>
                        </div>
                

                </form>
           

                 {{-- apis de las aplicaciones para registrarse --}}
                 <p class="text-center p-2">- O -</p>
                 <div class="social-auth-links text-center mb-3">
                    <a href="{{route('google-auth')}}" class="btn btn-block btn-danger btn-login">
                        <i class="fab fa-google-plus mr-2"></i>
                        Register Gmail
                    </a>
                </div>
                <div class="social-auth-links text-center mb-3">
                 
                    <a href="{{route('facebook-auth')}}" class="btn btn-block btn-primary btn-login">
                        <i class="fab fa-facebook mr-2"></i>
                        Login Facebook
                    </a>
                </div>
                {{-- necesario login --}}
                  {{-- Register link --}}
                  @if($register_url)
                    <p class="loginhere">
                        Don't have an account ? <a href="{{ $register_url }}" class="loginhere-link">Register</a>
                    </p>
                  @endif

                       {{-- Password reset link --}}
                @if($password_reset_url)
                <p class="text-center btn">
                    <a class="" href="{{ $password_reset_url }}">I forgot my password 
                    </a>
                </p>
                @endif
             
            </div>
        </div>
    </section>

</div>