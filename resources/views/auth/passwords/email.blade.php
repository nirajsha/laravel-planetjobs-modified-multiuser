<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('public/adminpanel/images/fab.png')}}">

    <title>{{ config('app.name', 'Laravel') }} - Recover Password</title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{asset('public/adminpanel/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css')}}">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="{{asset('public/adminpanel/css/bootstrap-extend.css')}}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('public/adminpanel/css/master_style.css')}}">

    <!-- NeoX Admin skins -->
    <link rel="stylesheet" href="{{asset('public/adminpanel/css/skins/_all-skins.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition bg-img" style="background-image:url({{asset('public/adminpanel/images/login-bg.jpg')}})" data-overlay=5>


<div class="container pt-3 h-p100">
    <div class="row h-p100 justify-content-sm-center align-items-center">
        <div class="col-sm-6 col-md-4">

            <div class="card border-info text-center">
                <div class="card-header">

                </div>
                <div class="card-body">

                    <img src="{{asset('public/adminpanel/images/login-top.png')}}" class="img-fluid  w-150 mb-10">
                    <h4 class="text-center mb-20">August Mountain</h4>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('admin.password.email')}}" method="post" class="form-signin">
                        @csrf
                        <input type="email" name="email" class="form-control mb-2 {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                        <button class="btn btn-lg btn-primary btn-block mb-20" type="submit">Reset</button>
                        <a href="{{route('admin.login')}}" class="text-center text-info">Back to Login</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- jQuery 3 -->
<script src="{{asset('public/adminpanel/assets/vendor_components/jquery/dist/jquery.min.js')}}"></script>

<!-- popper -->
<script src="{{asset('public/adminpanel/assets/vendor_components/popper/dist/popper.min.js')}}"></script>

<!-- Bootstrap 4.0-->
<script src="{{asset('public/adminpanel/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

</body>
</html>
