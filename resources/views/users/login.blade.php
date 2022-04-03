<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LOGIN | DIOR</title>

    {{--Styles css common--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ ('public/frontend/css/reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ('public/frontend/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ('public/frontend/css/header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ('public/frontend/css/footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ('public/frontend/css/side-panel-overplay.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ('public/backend/css/login.css') }}">

    @yield('styles')

    @yield('responsive')

    {{--Favicon common--}}
    <link rel="shortcut icon" href="https://www.dior.com/static/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="https://www.dior.com/static/favicon/apple-touch-icon.png">
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center login-form">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h1 text-gray-900 mb-4">Login</h1>
                                    </div>
                                    @if (session('error'))
                                        <div class="text-danger" >
                                            <b>●</b> {{ session('error') }}
                                        </div>
                                        <br>
                                    @endif

                                    <form class="user" method="POST" action=" {{ route('login.action') }} " >
                                        @csrf

                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="*Email Address">
                                                @if (session('emailerror'))
                                                    <div class="text-danger" >
                                                        {{ session('emailerror') }}
                                                    </div>
                                                    <br>
                                                @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="*Password">
                                            @if (session('passerror'))
                                                <div class="text-danger" >
                                                    {{ session('passerror') }}
                                                </div>
                                                <br>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            <b>Login</b>
                                        </button>

                                        {{-- <hr>
                                        <a href="#" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="#" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> --}}
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="#">Forgot Password?</a>
                                    </div>
                                    {{-- <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    {{--Scripts js common--}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ ('public/frontend/js/main.js') }}" crossorigin="anonymous"></script>
    <script src="{{ ('public/frontend/js/header.js') }}" crossorigin="anonymous"></script>
    <script src="{{ ('public/frontend/js/footer.js') }}" crossorigin="anonymous"></script>
    <script src="{{ ('public/frontend/js/side-panel-overplay.js') }}" crossorigin="anonymous"></script>

    @yield('scripts')
</body>

</html>
