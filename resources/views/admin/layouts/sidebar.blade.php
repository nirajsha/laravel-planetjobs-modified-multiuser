<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">


            <li class="treeview">
                <a href="#">
                    <i class="iconsmind-Posterous"></i>
                    <span>Category</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.category.create')}}"><i class="iconsmind-Add"></i>Add Category</a></li>
                    <li><a href="{{route('admin.category.view')}}"><i class="iconsmind-Add"></i>All Categories</a></li>
                    <li><a href=""><i class="iconsmind-Add"></i>Trashed Categories</a></li>

                </ul>

            </li>
             <li class="treeview">
                <a href="#">
                    <i class="iconsmind-Posterous"></i>
                    <span>Job</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.job.create')}}"><i class="iconsmind-Add"></i>Add Jobs</a></li>
                    <li><a href="{{route('admin.job.view')}}"><i class="iconsmind-Add"></i>All Jobs</a></li>
                    <li><a href=""><i class="iconsmind-Add"></i>Trashed Jobs</a></li>

                </ul>

            </li>

        </ul>


    </section>
</aside>
