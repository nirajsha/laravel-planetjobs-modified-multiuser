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
                My Profile
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="iconsmind-Library"></i></a></li>
                <li class="breadcrumb-item"><a href="javascript:">Admin</a></li>
                <li class="breadcrumb-item active">My Profile</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Basic Forms -->
            <div class="box box-solid box-info">
                <div class="box-header with-border">
                    <h6 class="box-subtitle text-white">Profile Details</h6>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form action="{{route('admin.update.profile', $user->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <h5>Name<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="name" id="name" class="form-control" data-validation-required-message="This field is required" value="{{$user->name}}"> </div>
                                </div>

                                <div class="form-group">
                                    <h5>Email<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="email" name="email" id="email" class="form-control"  data-validation-required-message="This field is required" value="{{$user->email}}"> </div>
                                </div>

                                <div class="form-group">
                                    <h5>Image</h5>
                                    <div class="controls">
                                        <input type="file" name="image" class="form-control"> </div>
                                    <br>
                                    <input type="hidden" name="current_image" value="{{$user->image}}">
                                    <img src="{{asset($user->image)}}" alt="{{$user->name}}" width="100px">
                                </div>



                                <div class="text-xs-right">
                                    <button type="submit" class="btn btn-info">Update</button>
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
    <!-- Form validator JavaScript -->
    <script src="{{asset('public/adminpanel/js/pages/validation.js')}}"></script>
    <script>
        ! function(window, document, $) {
            "use strict";
            $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
        }(window, document, jQuery);
    </script>


    <script type="text/javascript">
        @if(session('flash_message'))
        swal("Success!", "{!! session('flash_message') !!}", "success")
        @endif
    </script>
@endsection
