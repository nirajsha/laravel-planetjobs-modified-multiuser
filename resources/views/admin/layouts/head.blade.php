<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="icon" href="{{asset('public/adminpanel/images/fab.png')}}">

@yield('title')
<!-- Bootstrap 4.0-->
<link rel="stylesheet" href="{{asset('public/adminpanel/assets/vendor_components/bootstrap/dist/css/bootstrap.css')}}">
	{{-- <link rel="stylesheet" href="{{asset('public/adminpanel/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css')}}"> --}}

<!-- Bootstrap extend-->
<link rel="stylesheet" href="{{asset('public/adminpanel/css/bootstrap-extend.css')}}">

<!-- theme style -->
<link rel="stylesheet" href="{{asset('public/adminpanel/css/master_style.css')}}">

<!-- NeoX Admin skins -->
<link rel="stylesheet" href="{{asset('public/adminpanel/css/skins/_all-skins.css')}}">


<link href="{{asset('public/adminpanel/assets/vendor_components/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css">

@yield('styles')

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
