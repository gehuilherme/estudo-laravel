@section('title', 'Login')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MR - @yield('title')</title>

        {{-- Styles --}}
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/adminlte.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
        
        {{-- Scripts --}}
        <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('assets/js/all.min.js') }}"></script>
    </head>

    <body class="hold-transition login-page bg-black">
        <div class="login-box">
            <div class="login-logo">
                Medical Records
            </div>
    
            <div class="card">
                <div class="card-body login-card-body">
                    <form action="#" method="post">
                        <p class="login-box-msg">Sign in to start your session</p>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">
                                    Remember Me
                                    </label>
                                </div>
                            </div>
        
                            <div class="col-4">
                                <button type="submit" class="btn btn-dark btn-block">Sign In</button>
                            </div>
        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>