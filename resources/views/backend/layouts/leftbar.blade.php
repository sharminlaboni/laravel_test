<div class="leftbar">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <!-- Start Logobar -->
        <div class="logobar">
            {{-- <a href="{{url('/')}}" class="logo logo-large"><img src="backend/assets/images/logo.svg" class="img-fluid" alt="logo"></a> --}}
            <h1><a href="{{url('/')}}" class="logo logo-large">blog</a></h1>
            <a href="{{url('/')}}" class="logo logo-small"><img src="backend/assets/images/small_logo.svg" class="img-fluid" alt="logo"></a>
        </div>
        <!-- End Logobar -->
        <!-- Start Profilebar -->
        <div class="profilebar text-center">
            <div class="userbox">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="#" class="profile-icon"><img src="backend/assets/images/svg-icon/user.svg" class="img-fluid" alt="user"></a></li>
                    <li class="list-inline-item"><a href="#" class="profile-icon"><img src="backend/assets/images/svg-icon/email.svg" class="img-fluid" alt="email"></a></li>
                    <li class="list-inline-item"><a href="#" class="profile-icon"><img src="backend/assets/images/svg-icon/logout.svg" class="img-fluid" alt="logout"></a></li>
                </ul>
              </div>
        </div>
        <!-- End Profilebar -->
        <!-- Start Navigationbar -->
        <div class="navigationbar">
            <ul class="vertical-menu">
               

                
               
               
                
                

                
               

                <li>
                    <a href="javaScript:void();">
                      <img src="backend/assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard"><span>Blog Post</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{route('blog.index')}}"><i class="mdi mdi-circle"></i>Blog List</a></li>
                        <li><a href="{{route('blog.create')}}"><i class="mdi mdi-circle"></i>Add blog</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javaScript:void();">
                        <img src="backend/assets/images/svg-icon/layouts.svg" class="img-fluid" alt="layouts"><span>user</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                         <li><a href="{{route('user.index')}}"><i class="mdi mdi-circle"></i>user List</a></li> 

                    </ul>
                </li>

                <!-- <li>
                    <a href="javaScript:void();">
                        <img src="backend/assets/images/svg-icon/layouts.svg" class="img-fluid" alt="layouts"><span>posttag</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href=""><i class="mdi mdi-circle"></i>posttag List</a></li>
                        <li><a href=""><i class="mdi mdi-circle"></i>Add posttag</a></li>

                    </ul>
                </li>  -->

               

                

               

               
                {{-- settings --}}

                
                
              
        </div>
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div>

