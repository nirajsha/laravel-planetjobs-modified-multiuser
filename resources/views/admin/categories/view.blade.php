  @extends('admin.layouts.admin_design')

  @section('title')
      <title>All Category- {{ config('app.name', 'Laravel') }}</title>
  @endsection

  @section('content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          All Categories
        </h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"><i class="iconsmind-Library"></i></a></li>
          <li class="breadcrumb-item"><a href="#">Tables</a></li>
          <li class="breadcrumb-item active">All Categories</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="box box-solid box-primary">
              <div class="box-header with-border">
                <h4 class="box-title">See All Categories</h4>
            </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                      <thead>
                          <tr>
                              <th>Category Id</th>
                              <th>Name</th>
                              <th>Description</th>
                              <th>Parent_Id</th>
                              {{-- <th>Image</th> --}}
                              

                              <th>Actions</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($categories as $category)
                          <tr>
                              <td>{{$category->id}}</td>
                              <td>{{$category->title}}</td>
                              <td>{!! $category->description !!}</td>
                              <td>{{$category->parent_id}}</td>
                              {{-- <td>
                              @if(!empty($category->image))
                              <img src="{{asset('public/adminpanel/uploads/category/small/'.$category->image)}}" alt="" style="width: 50px;">
                               @endif
                            </td> --}} 

                             <td>
                                  <a href="{{ route('admin.category.edit',$category->id)}}"><button type="button" class="btn btn-info mb-5"> 
                                    <i class="fa fa-pencil"> </i></button></a>
                                  {{-- <a href="{{ route('admin.category.trash',$category->id)}}"><button type="button" class="btn btn-warning mb-5"><i class="fa fa-trash-o"> </i></button></a> --}}
                                  <a href="{{ route('admin.category.delete',$category->id)}}" id="delCat"><button type="button" class="btn btn-danger mb-5"><i class="fa fa-trash-o"> </i></button></a></td>
                             

                          </tr>
                          @endforeach
                         
                      </tbody>                  
                  </table>
                  </div>              
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->          
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->
  @endsection


  @section('scripts')
      <script type="text/javascript">
          @if(session('flash_message'))
          swal("Success!", "{!! session('flash_message') !!}", "success")
          @endif
        $("#delCat").click(function(){
          if(confirm('Are you sure you want to delete this category?')){
            return true;
          }
          return false;
        });
      </script>
  @endsection
