@extends('admin.layouts.admin_design')

@section('title')
    <title>Profile - {{ config('app.name', 'Laravel') }}</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Password Settings
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.edit.password')}}"><i class="iconsmind-Library"></i></a></li>
                <li class="breadcrumb-item"><a href="javascript:">Admin</a></li>
                <li class="breadcrumb-item active">Change Password</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Basic Forms -->
            <div class="box box-solid box-info">
                <div class="box-header with-border">
                    <h6 class="box-subtitle text-white">Change Password</h6>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="email" value="{{Auth::guard('web')->user()->email}}">
                                <div class="form-group">
                                    <h5>Current Password<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="password" name="current_password" id="current_password" class="form-control" data-validation-required-message="This field is required" >
                                        <p style="color: red; margin-bottom: 0px;">{{ $errors -> first('correct_password') }}</p>
                                        <b><p id="correct_password" style="color: green;"></p> </b>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>New Password<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="password" name="new_password" id="new_password" class="form-control"  data-validation-required-message="This field is required" > </div>
                                </div>

                                <div class="form-group">
                                    <h5>Confirm Password<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="password" name="confirm_password" id="confirm_password" class="form-control"  data-validation-required-message="This field is required" data-validation-match-match="new_password"> </div>
                                </div>




                                <div class="text-xs-right">
                                    <button type="submit" class="btn btn-info">Update Password</button>
                                </div>
                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


@section('scripts')

    <script type="text/javascript">
        @if(session('flash_message'))
        swal("Success!", "{!! session('flash_message') !!}", "success")
        @endif
    </script>

    <!-- Form validator JavaScript -->
    <script src="{{asset('public/adminpanel/js/pages/validation.js')}}"></script>
    <script>
        ! function(window, document, $) {
            "use strict";
            $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
        }(window, document, jQuery);
    </script>



    {{--Check current password--}}
    <script>
        $("#current_password").keyup(function(){
            var current_password = $("#current_password").val();
            // alert(current_password);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:'post',
                url:'check-password',
                data:{current_password:current_password},
                success:function(resp){
                    // alert(resp);
                    if(resp=="false"){

                        $("#correct_password").text("Entered value does not match the current password").css("color","red");

                    }else if(resp=="true"){

                        $("#correct_password").text("Current password matched").css("color","green");
                    }
                },error:function(resp){

                }
            });
        });
    </script>




@endsection

@section('styles')
    <style>
        .error{
            color: red;
        }
    </style>
@endsection
