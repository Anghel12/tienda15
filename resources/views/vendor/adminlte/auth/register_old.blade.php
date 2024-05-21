<x-app-layout>
@extends('adminlte::auth.auth-page', ['auth_type' => 'register'])

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
@else 
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
@endif

@section('auth_header', __('adminlte::adminlte.register_message'))

@section('auth_body')
    <form action="{{ $register_url }}" method="post">
        @csrf
        {{-- id de referido --}}
        <div id="referral-code-mostrar"></div>
        <input type="hidden" name="referral_code" id="referral_code" value="">


        {{-- Name field --}}
        <div class="input-group mb-3">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                   value="{{ old('name') }}" placeholder="{{ __('adminlte::adminlte.full_name') }}" autofocus>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Email field --}}
        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                   value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}">

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

        {{-- Confirm password field --}}
        <div class="input-group mb-3">
            <input type="password" name="password_confirmation"
                   class="form-control @error('password_confirmation') is-invalid @enderror"
                   placeholder="{{ __('adminlte::adminlte.retype_password') }}">

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Register button --}}
        <button type="submit" class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
            <span class="fas fa-user-plus"></span>
            {{ __('adminlte::adminlte.register') }}
        </button>

    </form>

   
   
    
    
    {{-- apis de las aplicaciones para registrarse --}}
    <div class="social-auth-links text-center mb-3">
        <p>- O -</p>
        <a href="{{route('facebook-auth')}}" class="btn btn-block btn-primary btn-login">
            <i class="fab fa-facebook mr-2"></i>
            Regístrate con Facebook
        </a>
    </div>

    <div class="social-auth-links text-center">
        <a href="{{route('google-auth')}}" class="btn btn-block btn-danger btn-login">
            <i class="fab fa-google-plus mr-2"></i>
            Regístrate con Gmail
        </a>
    </div>



    <div class="main">
        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="{{ $register_url }}" method="POST" id="signup-form" class="signup-form">
                        @csrf
                        <h2 class="form-title"><a href="{{ url('/') }}">x</a>Create account</h2>

                        {{-- id de referido --}}
                        <div id="referral-code-mostrar"></div>
                        <input class="loginhere p-2" type="hidden" name="referral_code" id="referral_code" value="">

                        {{-- form  --}}
                        <div class="form-group">
                            <input type="text" name="name" id="name"  class="form-input form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" placeholder="{{ __('adminlte::adminlte.full_name') }}" autofocus>
         
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-input @error('email') is-invalid @enderror"
                          value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}">

                          
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

                        <div class="form-group">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-input @error('password_confirmation') is-invalid @enderror"
                            placeholder="{{ __('adminlte::adminlte.retype_password') }}">
                
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>

                        <div class="form-group">
                             {{-- Register button --}}
                            <button type="submit" name="submit" id="submit" class="form-submit {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
                                <span class="fas fa-user-plus"></span>
                                {{ __('adminlte::adminlte.register') }}
                            </button>

                        </div>
                    </form>


                     {{-- apis de las aplicaciones para registrarse --}}
                     <p class="text-center p-2">- O -</p>
                     <div class="social-auth-links text-center mb-3">
                        <a href="{{route('google-auth')}}" class="btn btn-block btn-danger btn-login">
                            <i class="fab fa-google-plus mr-2"></i>
                            Regístrate con Gmail
                        </a>
                    </div>
                    <div class="social-auth-links text-center mb-3">
                        
                        <a href="{{route('facebook-auth')}}" class="btn btn-block btn-primary btn-login">
                            <i class="fab fa-facebook mr-2"></i>
                            Regístrate con Facebook
                        </a>
                    </div>

                    <p class="loginhere">
                        Have already an account ? <a href="{{ $login_url }}" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>
    
    
@stop

@section('auth_footer')
    <p class="my-0">
        <a href="{{ $login_url }}">
            {{ __('adminlte::adminlte.i_already_have_a_membership') }}
        </a>
    </p>
@stop


@push('js')
    <script>
        // Función para mostrar el campo de referencia al cargar la página
        function mostrarCampoReferencia() {
            const urlParams = new URLSearchParams(window.location.search);
            const referral_code = urlParams.get('ref');
            if (referral_code) {
                const referralCodeDiv = document.getElementById('referral-code-mostrar');
                referralCodeDiv.innerHTML = `Referido por: ${referral_code}`;
                document.getElementById('referral_code').value = referral_code;
                referralCodeDiv.classList.remove('d-none');
            }
        }
        // Llamado de la función
        mostrarCampoReferencia();
    </script>
@endpush
</x-app-layout>

