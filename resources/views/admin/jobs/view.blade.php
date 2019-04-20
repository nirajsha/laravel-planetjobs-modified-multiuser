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
All Jobs
</h1>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="iconsmind-Library"></i></a></li>
<li class="breadcrumb-item"><a href="#">Tables</a></li>
<li class="breadcrumb-item active">All Jobs</li>
</ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
<div class="col-12">
<div class="box box-solid box-primary">
<div class="box-header with-border">
<h4 class="box-title">See All Jobs</h4>
</div>
<!-- /.box-header -->
<div class="box-body">
<div class="table-responsive">
<table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
<thead>
<tr>
<th>Id</th>
<th>Company</th>
<th>Job</th>
<th>Description</th>
{{-- <th>Category Name</th> --}}

<th>Cat Id</th>
<th>Image</th>
<th>Seats</th>
<th>Location</th>
{{-- <th>Time</th> --}}
<th>Actions</th>
</tr>
</thead>
<tbody>
@foreach($jobs as $job)
<tr>
<td>{{$job->id}}</td>
<td>{{$job->company}}</td>

<td>{{$job->title}}</td>
<td>{{$job->description}}</td>
{{-- <td>{{$job->category_name }}</td> --}}
<td>{{$job->category_id}}</td>
<td>
@if(!empty($job->image))
<img src="{{asset('public/adminpanel/uploads/job/small/'.$job->image)}}" alt="" style="width: 50px;">
@endif

</td>

<td>{{$job->opening_job}}</td>
<td>{{$job->location}}</td>
{{-- <td>{{$job->availabe_time}}</td> --}}

<td>
<a href="{{ route('admin.job.edit',$job->id)}}"><button type="button" class="btn btn-info mb-5"><i class="fa fa-pencil"></i></button></a> 
{{--  <a href="{{ route('admin.job.trash',$job->id)}}"><button type="button" class="btn btn-warning mb-5">Trash</button></a> --}} 

<a href="javascript:" rel="{{$job->id}}" rel1="delete-job" class="btn btn-danger btn-xs deleteRecord" data-toggle="tooltip" title="Delete" data-original-title="Delete">
<i class="fa fa-trash"></i>
</a>


</td>

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
<!-- Form validator JavaScript -->
<script type="text/javascript">
        @if(session('flash_message'))
            swal("Success!", "{!! session('flash_message') !!}", "success")
        @endif
    </script>
<script>
       $(".deleteRecord").click(function(){
           var id = $(this).attr('rel');
           var deleteFunction = $(this).attr('rel1');
           // alert(deleteFunction);
           swal({
                   title: "Are You Sure?",
                   text: "You will not be able to recover this record again",
                   type: "warning",
                   showCancelButton: true,
                   confirmButtonClass: "btn-danger",
                   confirmButtonText: "Yes, Delete it!"
               },
               function(){
                   window.location.href="/planet-jobs/public/admin/"+deleteFunction+"/"+id;
               });

       });
   </script>

@endsection
