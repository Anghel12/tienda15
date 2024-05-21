<x-app-layout>

  <!-- Font Icon -->
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

  <!-- Main css -->
  <link rel="stylesheet" href="css/style.css">
</x-app-layout>
<body>
    @php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
    @php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )
    
    @if (config('adminlte.use_route_url', false))
        @php( $login_url = $login_url ? route($login_url) : '' )
        @php( $register_url = $register_url ? route($register_url) : '' )
    @else 
        @php( $login_url = $login_url ? url($login_url) : '' )
        @php( $register_url = $register_url ? url($register_url) : '' )
    @endif


    <main class="main" id="top">
        <div class="container-fluid bg-300 dark__bg-1200">
          <div class="bg-holder bg-auth-card-overlay" style="background-image:url(../../../assets/img/bg/37.png);"></div>
          <!--/.bg-holder-->
          <div class="row flex-center position-relative min-vh-100 g-0 py-5">
            <div class="col-11 col-sm-10 col-xl-8">
              <div class="card border border-200 auth-card">
                <div class="card-body pe-md-0">
                  <div class="row align-items-center gx-0 gy-7">
                   {{--  <div class="col-auto bg-100 dark__bg-1100 rounded-3 position-relative overflow-hidden auth-title-box">
                      <div class="bg-holder" style="background-image:url(../../../assets/img/bg/38.png);"></div>
                      <!--/.bg-holder-->
                      <div class="position-relative px-4 px-lg-7 pt-7 pb-7 pb-sm-5 text-center text-md-start pb-lg-7 card-sign-up">
                        <h3 class="mb-3 text-black fs-1">Phoenix Authentication</h3>
                        <p class="text-700">Give yourself some hassle-free development process with the uniqueness of Phoenix!</p>
                        <ul class="list-unstyled mb-0 w-max-content w-md-auto mx-auto">
                          <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">Fast</span></li>
                          <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">Simple</span></li>
                          <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">Responsive</span></li>
                        </ul>
                      </div>
                      <div class="position-relative z-index--1 mb-6 d-none d-md-block text-center mt-md-15"><img class="auth-title-box-img d-dark-none" src="../../../assets/img/spot-illustrations/auth.png" alt="" /><img class="auth-title-box-img d-light-none" src="../../../assets/img/spot-illustrations/auth-dark.png" alt="" /></div>
                    </div> --}}
                    <div class="col mx-auto">
                      <div class="auth-form-box">
                        <div class="text-center mb-7"><a class="d-flex flex-center text-decoration-none mb-4" href="../../../index.html">
                            <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block"><img src="../../../assets/img/icons/logo.png" alt="" width="58" /></div>
                          </a>
                          <h3 class="text-1000">Sign Up</h3>
                          <p class="text-700">Create your account today</p>
                        </div>
                        <button url="{{route('google-auth')}}" class="btn btn-phoenix-secondary w-100 mb-3">
                            <span class="fab fa-google text-danger me-2 fs--1"></span>Sign up with google
                        </button>
                        <button url="{{route('facebook-auth')}}" class="btn btn-phoenix-secondary w-100"><span class="fab fa-facebook text-primary me-2 fs--1">
                                </span>Sign up with facebook
                        </button>
                        <div class="position-relative mt-4">
                          <hr class="bg-200" />
                          <div class="divider-content-center bg-white">or use email</div>
                        </div>
                        <form action="{{ $register_url }}" method="POST" id="signup-form" class="signup-form">
                            @csrf



                             {{-- id de referido --}}
                        <div id="referral-code-mostrar"></div>
                        <input class="mb-3 text-start" type="hidden" name="referral_code" id="referral_code" value="">

                          <div class="mb-3 text-start"><label class="form-label" for="name">Name</label>
                            <input type="text" name="name" id="name"  class="form-control" 
                            value="{{ old('name') }}" placeholder="{{ __('adminlte::adminlte.full_name') }}" autofocus>

                            @error('name')
                            <span class=" text-900 fs--1 form-icon" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                          
                          <div class="mb-3 text-start"><label class="form-label" for="email">Email address</label>
                            <input type="email" name="email" id="email" class="form-control"
                            value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}">
  
                            
                              @error('email')
                              <span class=" text-900 fs--1 form-icon" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                               @enderror
                        </div>

                          <div class="row g-3 mb-3">
                            <div class="col-xl-6">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control form-icon-input"
                                placeholder="{{ __('adminlte::adminlte.password') }}">
                                <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                                @error('password')
                                <span class=" text-900 fs--1 form-icon" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-xl-6">
                                <label class="form-label" for="confirmPassword">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-icon-input"
                                placeholder="{{ __('adminlte::adminlte.retype_password') }}">
                                
                                @error('password_confirmation')
                                <span class=" text-900 fs--1 form-icon" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                          </div>

                           <div class="form-check mb-3">
                            <input type="checkbox" name="agree-term" id="agree-term" class="form-check-input"  />
                            <label class="form-label fs--1 text-none" for="termsService">I accept the 
                                <a href="sign-up.html#!">terms </a>
                                and 
                                <a href="sign-up.html#!">privacy policy</a>
                            </label>
                            </div>
                            <button class="btn btn-primary w-100 mb-3">
                                {{ __('adminlte::adminlte.register') }}
                            </button>

                          <div class="text-center"><a class="fs--1 fw-bold" href="{{ $login_url }}">Sign in to an existing account</a></div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    </main>

    <style>
        .form-submit {
            cursor: pointer; /* Cambia el cursor a una manita */
        }
        .toggle-password {
            cursor: pointer; /* Cambia el cursor a una manita */
        }
    
        .btn-login{
            padding: 15px;
        width: 100%;
        }

    </style>
</body>
    <script src="vendor/jquery/jquery.min.js"></script>

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

<style>
    .form-submit {
        cursor: pointer; /* Cambia el cursor a una manita */
    }
    .toggle-password {
        cursor: pointer; /* Cambia el cursor a una manita */
    }
    .color-red{
        color: brown;
    }
</style>


<!-- Agrega esto después de incluir jQuery -->
<script>
    $(document).ready(function() {
        $('.toggle-password').on('click', function() {
            var passwordField = $('#password');
            var passwordFieldType = passwordField.attr('type');

            if (passwordFieldType === 'password') {
                passwordField.attr('type', 'text');
            } else {
                passwordField.attr('type', 'password');
            }
        });
    });
</script>



