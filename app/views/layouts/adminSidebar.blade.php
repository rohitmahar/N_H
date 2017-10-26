
      <aside class="main-sidebar" style="background-color:#222d32;">
              <!-- sidebar: style can be found in sidebar.less -->
              <section class="sidebar">



                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">

                  <li class="treeview">
                    <a href="{{URL::route('dashboard')}}">
                      <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>

                  </li>

                  <li class="treeview">
                    <a href="{{URL::route('setting')}}">
                      <i class="fa fa-laptop"></i>
                      <span>Update User</span>
                      <i class="fa fa-angle-left pull-right"></i>
                    </a>

                  </li>

                  @if(Auth::user()->level == 1)



                  <li class="treeview">
                       <a href="#">
                           <i class="fa fa-share"></i> <span>Product</span>
                           <i class="fa fa-angle-left pull-right"></i>
                       </a>
                       <ul class="treeview-menu">
                          <li><a href="{{URL::route('upload-products')}}"><i class="fa fa-circle-o"></i> Upload Product</a></li>
                          <li><a href="{{URL::route('uploadBrand')}}"><i class="fa fa-circle-o"></i> Upload Brand</a></li>
                          <li><a href="{{URL::route('uploadCategory')}}"><i class="fa fa-circle-o"></i> Upload Category</a></li>
                          
                       </ul>
                  </li>

                  @endif

                  <li class="treeview">
                    <a href="#">
                      <i class="fa fa-folder"></i> <span>View</span>
                      <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="{{URL::route('delivery')}}"><i class="fa fa-circle-o"></i> Order Details</a></li>
                      @if(Auth::user()->level == 1)
                      <li><a href="{{URL::route('viewUploadedProducts')}}"><i class="fa fa-circle-o"></i> Uploaded Products</a></li>
                      <li><a href="{{URL::route('viewUsers')}}"><i class="fa fa-circle-o"></i> View Users</a></li>

                      @endif

                    </ul>
                  </li>


                </ul>
              </section>
              <!-- /.sidebar -->
       </aside>
