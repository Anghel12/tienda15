<x-app-layout>

  <!-- Font Icon -->
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

  <!-- Main css -->
  <link rel="stylesheet" href="css/style.css">
</x-app-layout>
<body>
   
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

<div class="container-fluid bg-300 dark__bg-1200">
    <div class="bg-holder bg-auth-card-overlay" style="background-image:url(../../../assets/img/bg/37.png);"></div>
    <!--/.bg-holder-->
    <div class="row flex-center position-relative min-vh-100 g-0 py-5">
      <div class="col-11 col-sm-10 col-xl-8">
        <div class="card border border-200 auth-card">
          <div class="card-body pe-md-0">
            <div class="row align-items-center gx-0 gy-7">
            {{--   <div class="col-auto bg-100 dark__bg-1100 rounded-3 position-relative overflow-hidden auth-title-box">
                <div class="bg-holder" style="background-image:url(../../../assets/img/bg/38.png);"></div>
                <!--/.bg-holder-->
                <div class="position-relative px-4 px-lg-7 pt-7 pb-7 pb-sm-5 text-center text-md-start pb-lg-7 pb-md-7">
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
                    <h3 class="text-1000">Sign In</h3>
                    <p class="text-700">Get access to your account</p>
                  </div>

                  
                  <a href="{{route('google-auth')}}" class="btn btn-phoenix-secondary w-100 mb-3"><span class="fab fa-google text-danger me-2 fs--1"></span>Sign in with google</a>

                  <a href="{{route('facebook-auth')}}" class="btn btn-phoenix-secondary w-100"><span class="fab fa-facebook text-primary me-2 fs--1"></span>Sign in with facebook</a>

                  <div class="position-relative">
                    <hr class="bg-200 mt-5 mb-4" />
                    <div class="divider-content-center bg-white">or use email</div>
                  </div>
                  <form action="{{ $login_url }}" method="POST" id="signup-form" class="signup-form">
                    @csrf

                  <div class="mb-3 text-start"><label class="form-label" for="email">Email address</label>
                    <div class="form-icon-container">
                        <input class="form-control form-icon-input" type="email" name="email" id="email"
                        value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" autofocus>
                        <span class="fas fa-user text-900 fs--1 form-icon"></span>
                    </div>
                  
                    @error('email')
                    <span class=" text-900 fs--1 form-icon" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  </div>
                  <div class="mb-3 text-start"><label class="form-label" for="password">Password</label>
                    <div class="form-icon-container"><input class="form-control form-icon-input" type="password" name="password" id="password"
                        placeholder="{{ __('adminlte::adminlte.password') }}">
                        <span class="fas fa-key text-900 fs--1 form-icon"></span>
                    </div>

                    @error('password')
                    <span class=" text-900 fs--1 form-icon" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                     @enderror
                  </div>

                  <div class="row flex-between-center mb-7">
                    <div class="col-auto">
                      <div class="form-check mb-0" title="{{ __('adminlte::adminlte.remember_me_hint') }}">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label mb-0" for="remember" for="basic-checkbox">{{ __('adminlte::adminlte.remember_me') }}</label>
                      </div>
                    </div>
                    @if($password_reset_url)
                    <div class="col-auto">
                        <a class="fs--1 fw-semi-bold" href="{{ $password_reset_url }}">Forgot Password?</a>
                    </div>
                    @endif

                  </div>
                  <button type="submit" name="submit" id="submit"  class="btn btn-primary w-100 mb-3"> {{ __('adminlte::adminlte.sign_in') }}</button>

                </form>
                  <div class="text-center"><a class="fs--1 fw-bold" href="{{ $register_url }}">Create an account</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
    @section('auth_footer')
    <p class="my-0">
        <a href="{{ $login_url }}">
            {{ __('adminlte::adminlte.i_already_have_a_membership') }}
        </a>
    </p>
@stop

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

<script src="vendor/jquery/jquery.min.js"></script>

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



