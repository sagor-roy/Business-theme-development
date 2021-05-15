<header>
    <!-- nav wrapper -->
    <div class="nav_wrapper fixed-top">
        <!-- fixed navbar -->
        <nav class="navbar py-3">
            <!-- content area -->
            <div class="container-fluid">
                <!-- sideBar open button -->
                <button id="sideBarOpen" type="button" class="collapse_btn">
                    <i class="fas fa-bars"></i>
                </button>
                <!-- navbar right content -->
                <div class="right_content text-right">
                    {{--visit side button--}}
                    <div class="btn-group">
                        <a href="{{ route('home') }}" target="_blank" class="btn btn-sm btn-primary">Visit Website</a>
                    </div>
                    <!-- notification -->
                    <div class="btn-group">
                        <button class="dropdown-toggle notification" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-bell"></i> <sup class="bg-danger px-1  rounded-circle">0</sup>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-xl">
                            <div class="dropdown_heading">
                                <p>You have <strong class="text-primary">13</strong> notifications.</p>
                                <!-- list group -->
                                <a href="#" class="list-group-item active">
                                    <div class="row">
                                        <div class="col-3">
                                            <img class="img-fluid rounded-circle" src="vendor/img/avata/team-4.jpg" alt="">
                                        </div>
                                        <div class="col-9">
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <h6>John Doe</h6>
                                                </div>
                                                <div class="float-right">
                                                    <p class="text-muted text-sm">3 hrs ago</p>
                                                </div>
                                            </div>
                                            <p>Hello world how are you?</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- list group -->
                                <a href="#" class="list-group-item">
                                    <div class="row">
                                        <div class="col-3">
                                            <img class="img-fluid rounded-circle" src="vendor/img/avata/team-4.jpg" alt="">
                                        </div>
                                        <div class="col-9">
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <h6>John Doe</h6>
                                                </div>
                                                <div class="float-right">
                                                    <p class="text-muted text-sm">3 hrs ago</p>
                                                </div>
                                            </div>
                                            <p>Hello world how are you?</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- list group -->
                                <a href="#" class="list-group-item">
                                    <div class="row">
                                        <div class="col-3">
                                            <img class="img-fluid rounded-circle" src="vendor/img/avata/team-4.jpg" alt="">
                                        </div>
                                        <div class="col-9">
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <h6>John Doe</h6>
                                                </div>
                                                <div class="float-right">
                                                    <p class="text-muted text-sm">3 hrs ago</p>
                                                </div>
                                            </div>
                                            <p>Hello world how are you?</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- list group -->
                                <a href="#" class="list-group-item">
                                    <div class="row">
                                        <div class="col-3">
                                            <img class="img-fluid rounded-circle" src="vendor/img/avata/team-4.jpg" alt="">
                                        </div>
                                        <div class="col-9">
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <h6>John Doe</h6>
                                                </div>
                                                <div class="float-right">
                                                    <p class="text-muted text-sm">3 hrs ago</p>
                                                </div>
                                            </div>
                                            <p>Hello world how are you?</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- view all -->
                                <a href="#" class="view_all">view all</a>
                            </div>
                        </div>
                    </div>
                    <!-- message -->
                    <div class="btn-group">
                        <button class="dropdown-toggle notification" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-comment-dots"></i> <sup class="bg-danger px-1  rounded-circle">{{ count($messageCount) }}</sup>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-xl message_box">
                            <div class="dropdown_heading">
                                <p>You have <strong class="text-primary">{{ count($messageCount) }}</strong> message</p>
                                <!-- list group -->
                                @foreach($message as $row)
                                <a href="{{ route('admin.contactMessage',$row->id) }}" class="list-group-item active">
                                    <div class="row">
                                        <div class="col-2">
                                            <i style="font-size: 30px;border-radius: 0px;color: #6cb2eb" class="fas fa-user-circle bg-transparent p-0"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <h6>{{ ucwords($row->name) }}</h6>
                                                </div>
                                                <div class="float-right">
                                                    <p class="text-muted text-sm">{{ $row->created_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                            <p>{{ substr($row->message,0,30).'.....' }}</p>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                                <!-- view all -->
                                <a href="#" class="view_all">view all</a>
                            </div>
                        </div>
                    </div>
                    <!-- user profile link-->
                    <div class="btn-group">
                        <button class="dropdown-toggle user" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img width="35px" class="img-fluid rounded-circle" src="{{ asset('assets/backend/vendor/img/avata/team-4.jpg') }}" alt=""> <span class="mx-2">{{ Auth::user()->name }}</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right profile_link">
                            <div class="pro_body">
                                <p>welcome</p>
                                <ul>
                                    <li><a href="{{ route('admin.profile') }}">
                                            <i class="fas fa-user text-success"></i> <span class="mx-2">My Profile</span>
                                        </a></li>
                                    <li><a href="#">
                                            <i class="fas fa-cogs text-primary"></i> <span class="mx-2">Setting</span>
                                        </a></li>
                                    <li><a href="#">
                                            <i class="fas fa-calendar-week text-info"></i> <span class="mx-2">Activity</span>
                                        </a></li>
                                    <li><a href="#">
                                            <i class="far fa-life-ring text-warning"></i> <span class="mx-2">Support</span>
                                        </a></li>
                                    <hr class="mt-0 mb-0">
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt text-danger"></i> <span class="mx-2">Logout</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
