<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Planet Jobs</title>

<link rel="stylesheet" href="{{asset('public/css/frontend_css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('public/css/frontend_css/line-icons.css')}}">
<link rel="stylesheet" href="{{asset('public/css/frontend_css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('public/css/frontend_css/owl.theme.default.css')}}">
<link rel="stylesheet" href="{{asset('public/css/frontend_css/slicknav.min.css')}}">
<link rel="stylesheet" href="{{asset('public/css/frontend_css/animate.css')}}">
<link rel="stylesheet" href="{{asset('public/css/frontend_css/main.css')}}">
<link rel="stylesheet" href="{{asset('public/css/frontend_css/responsive.css')}}">
<link rel="stylesheet" href="{{asset('public/css/frontend_css/custom.css')}}">
</head>
<body>

@include('admin.layouts.frontLayout.front_header')

@yield('content')


@include('admin.layouts.frontLayout.front_footer')


<div class="icon-bar">
        <a href="#" class="facebook"><i class="lni-facebook-filled"></i></a>
        <a href="#" class="twitter"><i class="lni-twitter-filled"></i></a>
        <a href="#" class="google"><i class="lni-instagram-filled"></i></a>
         <a href="#" class="linkedin"><i class="lni-linkedin"></i></a>
        </div>

<a href="#" class="back-to-top">
<i class="lni-arrow-up"></i>
</a>

<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>


<script src="{{asset('public/js/frontend_js/jquery-min.js')}}"></script>
<script src="{{asset('public/js/frontend_js/popper.min.js')}}"></script>
<script src="{{asset('public/js/frontend_js/bootstrap.min.js')}}"></script>
{{-- <script src="{{asset('public/js/frontend_js/color-switcher.js')}}"></script> --}}
<script src="{{asset('public/js/frontend_js/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/js/frontend_js/jquery.slicknav.js')}}"></script>
<script src="{{asset('public/js/frontend_js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('public/js/frontend_js/waypoints.min.js')}}"></script>
<script src="{{asset('public/js/frontend_js/form-validator.min.js')}}"></script>
<script src="{{asset('public/js/frontend_js/contact-form-script.js')}}"></script>
<script src="{{asset('public/js/frontend_js/main.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#cv_file_trigger').click(function(){
      $('#upload_cv').trigger('click');
      //$(this).parents('.dropdown').addClass('active');
      var value = $('#upload_cv').val();
      alert(value);
    })
    $(document).on('click',function(e){
      var target = e.target.id;
      //alert(target);
      //console.log(target);
      if( target == 'trigger' || target == 'upload_cv' ){
        $('#upload_cv').parents('.dropdown').addClass('active');
      }else{
        $('#upload_cv').parents('.dropdown').removeClass('active');
      }
    })
  })
</script>
</body>
</html>