    @extends('admin.layouts.admin_design')

    @section('title')
    <title>Edit Category {{ config('app.name', 'Laravel') }}</title>
    @endsection

    @section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
         Add Category
     </h1>
     <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="iconsmind-Library"></i></a></li>
        <li class="breadcrumb-item"><a href="javascript:">Admin</a></li>
        <li class="breadcrumb-item active">Edit Category</li>
    </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <!-- Basic Forms -->
    <div class="box box-solid box-info">
        <div class="box-header with-border">
            <h6 class="box-subtitle text-white">Category Details</h6>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col">
                    <form action="{{route('admin.category.edit',$categoryDetails->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <h5>Category Name<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="title" id="title" class="form-control" data-validation-required-message="Name Field is Required" value="{{ $categoryDetails->title}}"> </div>
                            </div>
                            <div class="form-group">
                                <h5>Category Level<span class="text-danger">*</span></h5>
                                <div class="controls">
                                  <select name="parent_id"  id="parent_id" class="form-control" aria-invalid="false" data-validation-required-message="Category Level is Required" value="{{ $categoryDetails->parent_id}}">
                                    <option value="0">Main Category </option>
                                    @foreach($levels as $val)
                                    <option value="{{ $val->id }}">{{ $val->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>Description <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <textarea name="description" id="description" class="form-control"  data-validation-required-message="Description Field is Required">{{$categoryDetails->description}}</textarea>
                                <div class="help-block"></div></div>
                            </div>

                        <div class="form-group">
                                <h5>Image</h5>
                                <div class="controls">
                                    <input type="file" name="image" class="form-control">{{ $categoryDetails->image}}</div>
                                    <br>    
                                </div>
                                {{-- <div class="form-group">
                                <h5>Icon</h5>
                                <div class="controls">
                                    <input type="file" name="image" class="form-control">{{ $categoryDetails->icon}}</div>
                                    <br>    
                                </div> --}}
                               
                              <div class="text-xs-right">
                                <button type="submit" class="btn btn-info">Edit Category</button>
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
