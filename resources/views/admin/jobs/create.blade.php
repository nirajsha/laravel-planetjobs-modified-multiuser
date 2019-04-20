@extends('admin.layouts.admin_design')

@section('title')
    <title>Jobs{{ config('app.name', 'Laravel') }}</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Add Jobs
            </h1>
             <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="iconsmind-Library"></i></a></li>
                <li class="breadcrumb-item"><a href="javascript:">Admin</a></li>
                <li class="breadcrumb-item active">Add Jobs</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
         

            <!-- Basic Forms -->
            <div class="box box-solid box-info">
                <div class="box-header with-border">
                    <h6 class="box-subtitle text-white">Job Details</h6>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form action="{{route('admin.job.create')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                           <div class="form-group">
                                    <h5>Under Category<span class="text-danger">*</span></h5>
                <div class="controls">
                  <select name="category_id"  id="category_id" class="form-control" aria-invalid="false" data-validation-required-message="Category Level is Required" >
                  <?php echo "$categories_dropdown"; ?>
                  </select>
                </div>
              </div>
               <div class="form-group">
                                    <h5>Company<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="company" id="company" class="form-control" data-validation-required-message="Company Name is Required" > </div>
                                </div>
                                <div class="form-group">
                                    <h5>Job Title<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="title" id="title" class="form-control" data-validation-required-message="Name Field is Required" > </div>
                                </div>
                     
                                <div class="form-group">
                        <h5>Description <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <textarea name="description" id="description" class="form-control" placeholder="Textarea text" data-validation-required-message="Description Field is Required"></textarea>
                        <div class="help-block"></div></div>
                    </div>
                        <div class="form-group">
                                    <h5>Image</h5>
                                    <div class="controls">
                                        <input type="file" name="image" id="image" class="form-control"> </div>
                                    <br>    
                                </div>

                                
                                <div class="form-group validate">
                        <h5>Opening Jobs <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="opening_job" id="opening_job" class="form-control" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="No Characters Allowed, Only Numbers" data-validation-required-message="Opening Job Field is Required" aria-invalid="false"> <div class="help-block"></div></div>
                    </div>
                 
                    <div class="form-group">
                        <h5>Location<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <textarea name="location" id="location" class="form-control" placeholder="Textarea text" data-validation-required-message="Location Field is Required"></textarea>
                        <div class="help-block"></div></div>
                    </div>
                       <div class="form-group">
                        <h5>Available Time<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="available_time" id="available_time" required="" class="form-control" aria-invalid="false" data-validation-required-message="Available Time Field is Required">
                                <option value="">Select Time Available</option>
                                <option value="Full Time">Full Time</option>
                                <option value="Part Time">Part Time</option>
                            </select>
                        <div class="help-block"></div></div>
                    </div>
                

                                <div class="text-xs-right">
                                    <button type="submit" class="btn btn-info" id="btn">Add Job</button>
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

@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

 <script>
      $('#description').summernote({
        tabsize: 2,
        height: 100
      });
    </script> 

   <script>
$(document).ready(function(){
  var count = 0;
$("#btn").click(function() {
    count++;
    $("#counter").html("Jobs: "+count);
}
  });
  
</script>
@endsection
