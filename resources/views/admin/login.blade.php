<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Login | Graindashboard UI Kit</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets')}}/admin/img/favicon.ico">

    <!-- Template -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/graindashboard/css/graindashboard.css">
</head>

<body class="">

<main class="main">

    <div class="content">

        <div class="container-fluid pb-5">

            <div class="row justify-content-md-center">
                <div class="card-wrapper col-12 col-md-4 mt-5">
                    <div class="brand text-center mb-3">
                        <a href="/"><img alt=" " src="{{asset('assets')}}/admin/img/logo.png"></a>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Login</h4>
                            @include('home.message')
                            <form action="{{ route('admin_logincheck') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="email">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email" required="" autofocus="">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password
                                    </label>
                                    <input id="password" type="password" class="form-control" name="password" required="">
                                    <div class="text-right">
                                        <a href="password-reset.html" class="small">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-check position-relative mb-2">
                                        <input type="checkbox" class="form-check-input d-none" id="remember" name="remember">
                                        <label class="checkbox checkbox-xxs form-check-label ml-1" for="remember"
                                               data-icon="&#xe936">Remember Me</label>
                                    </div>
                                </div>

                                <div class="form-group no-margin">
                                    <button class="btn btn-primary btn-block" type="submit">
                                        Sign In
                                    </button>
                                </div>
                                <div class="text-center mt-3 small">
                                    Don't have an account? <a href="register.html">Sign Up</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="{{asset('assets')}}/admin/graindashboard/js/graindashboard.js"></script>
<script src="{{asset('assets')}}/admin/graindashboard/js/graindashboard.vendor.js"></script>
</body>
</html>
