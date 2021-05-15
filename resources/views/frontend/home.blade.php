{{--main layout include--}}
@extends('frontend.layout.master')
{{--end--}}

{{--Title--}}
@section('title')
    Home Page
@endsection
{{--end--}}

{{--start--}}
@section('content')
    <!-- main content start -->
    <section class="content">
        <!-- home section -->
        @foreach ($homeSec as $row )
        <div style="background-image: -webkit-gradient(linear, left top, left bottom, from({{ $row->color }}), to({{ $row->color }})), url({{ asset($row->img) }});background-image: linear-gradient({{ $row->color }}, {{ $row->color }}), url({{ asset($row->img) }});background-attachment: {{ $row->position }};" class="home_section">
            <div class="container">
                <div class="home_content text-light mx-auto">
                    <p>{{ $row->text }}</p>
                    <h3>{{ $row->head }}</h3>
                    <a href="#">{{ $row->btn }}</a>
                </div>
            </div>
        </div>
        @endforeach
        <!-- end -->

        <!-- why choose us section -->
        @foreach ($status as $row)
        @if ($row->choose == 'active')
        <div class="why_choose_us_section first_section_padding">
            <div class="container">
                @foreach($choose as $row)
                <div class="heading_title">
                    <h4>{{ $row->head }}</h4>
                    <p>{{ $row->text }}</p>
                </div>
                @endforeach
                <div class="row grid_system">
                    @foreach($choose1 as $row)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 row_padd">
                        <div class="choose_card text-center">
                            <img width="50%" class="img-fluid" src="{{ asset($row->img) }}" alt="Img">
                            <h5>{{ $row->head }}</h5>
                            <p>{{ $row->text }}</p>
                        </div>
                    </div>
                    @endforeach
                    @foreach($choose2 as $row)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 row_padd">
                        <div class="choose_card text-center">
                            <img width="50%" class="img-fluid" src="{{ asset($row->img) }}" alt="Img">
                            <h5>{{ $row->head }}</h5>
                            <p>{{ $row->text }}</p>
                        </div>
                    </div>
                    @endforeach
                    @foreach($choose3 as $row)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 row_padd">
                        <div class="choose_card text-center">
                            <img width="50%" class="img-fluid" src="{{ asset($row->img) }}" alt="Img">
                            <h5>{{ $row->head }}</h5>
                            <p>{{ $row->text }}</p>
                        </div>
                    </div>
                    @endforeach
                    @foreach($choose4 as $row)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 row_padd">
                        <div class="choose_card text-center">
                            <img width="50%" class="img-fluid" src="{{ asset($row->img) }}" alt="Img">
                            <h5>{{ $row->head }}</h5>
                            <p>{{ $row->text }}</p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        @else
        @endif
        @endforeach
        <!-- end -->

        <!-- click here section -->
        @foreach ($status as $row)
        @if ($row->click == 'active')
        <p class="text-center click_here">Feel free to contact us
            for more details <a class="text-warning" href="contact.html">Click here</a></p>
        <hr class="click_here_line">
        @else
        @endif
        @endforeach
        <!-- end -->

        <!-- our offer section -->
        @foreach ($status as $row)
        @if ($row->offer == 'active')
        <div class="offer_section section_padding">
            @foreach($offer as $row)
            <div class="heading_title text-center">
                <p class="first_text text-warning">{{ $row->text }}</p>
                <h4>{{ $row->head }}</h4>
            </div>
            @endforeach
            <div class="container">
                <div class="offer_content">
                    <div class="row">
                        @foreach($offer as $row)
                        <div class="col-xl-5 col-lg-5">
                            <img class="img-fluid" src="{{ asset($row->img) }}" alt="">
                        </div>
                        @endforeach
                        <div class="col-xl-7 col-lg-7">
                            <div class="offer_right">
                                @foreach($offer as $row)
                                <h5>{{ $row->sub_head }}</h5>
                                @endforeach
                                @foreach($icon1 as $row)
                                <div class="row offer_grid">
                                    <div class="col-xl-1 col-lg-1">
                                        <i class="{{ $row->icon }}"></i>
                                    </div>
                                    <div class="col-xl-8 col-lg-8">
                                        {{ $row->content }}
                                    </div>
                                </div>
                                    @endforeach
                                 @foreach($icon2 as $row)
                                <div class="row offer_grid">
                                    <div class="col-xl-1 col-lg-1">
                                        <i class="{{ $row->icon }}"></i>
                                    </div>
                                    <div class="col-xl-8 col-lg-8">
                                        {{ $row->content }}
                                    </div>
                                </div>
                                    @endforeach
                                 @foreach($icon3 as $row)
                                <div class="row offer_grid">
                                    <div class="col-xl-1 col-lg-1">
                                        <i class="{{ $row->icon }}"></i>
                                    </div>
                                    <div class="col-xl-8 col-lg-8">
                                        {{ $row->content }}
                                    </div>
                                </div>
                                    @endforeach
                                 @foreach($icon4 as $row)
                                <div class="row offer_grid">
                                    <div class="col-xl-1 col-lg-1">
                                        <i class="{{ $row->icon }}"></i>
                                    </div>
                                    <div class="col-xl-8 col-lg-8">
                                        {{ $row->content }}
                                    </div>
                                </div>
                                    @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        @endif
        @endforeach
        <!-- end -->


        <!-- our product -->
        @foreach ($status as $row)
        @if ($row->product == 'active')
        <div class="our_product">
            <div class="container">
                <div class="heading_title text-center">
                    <h4>Our Product</h4>
                    <p>We package the products with best services <br> to make you a happy customer</p>
                </div>
                <div class="row grid_system">
                    @foreach($show as $row)
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 row_padd">
                        <div class="blog-card pro_card my-3">
                            <img class="card-imgs d-block img-fluid" src="{{ asset($row->img) }}" alt="Bologna">
                            <div class="card-body">
                                <h5 class="card-title">{{ $row->title }}</h5>
                                <p class="card-text text-justify pro_desc">{{ strip_tags(substr($row->content,0,85).'......') }}</p>
                                <a class="btn btn-sm btn-info" href="{{ route('proDetail',$row->slug) }}">View Details</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @else
        @endif
        @endforeach
        <!-- end -->

        <!-- experienc staff section -->
        @foreach ($status as $row)
        @if ($row->staff == 'active')
        <div class="experience_staff_section section_padding">
            <div class="container">
                <div class="heading_title text-center">
                    <h4>Experienced Staff</h4>
                    <p>Our experts have been featured <br> in press numerous times.</p>
                </div>
                <div class="row grid_system">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 row_padd">
                        <div class="staff_card text-center">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/team/team-member-1.jpg') }}" alt="img">
                            <div class="staff_body">
                                <h5>John Doe</h5>
                                <p>Web Developer</p>
                                <ul class="link_grid">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 row_padd">
                        <div class="staff_card text-center">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/team/team-member-2.jpg') }}" alt="img">
                            <div class="staff_body">
                                <h5>John Doe</h5>
                                <p>Web Developer</p>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 row_padd">
                        <div class="staff_card text-center">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/team/team-member-3.jpg') }}" alt="img">
                            <div class="staff_body">
                                <h5>John Doe</h5>
                                <p>Web Developer</p>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 row_padd">
                        <div class="staff_card text-center">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/team/team-member-2.jpg') }}" alt="img">
                            <div class="staff_body">
                                <h5>John Doe</h5>
                                <p>Web Developer</p>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        @endif
        @endforeach
        <!-- end -->

        <!-- how it work section -->
        @foreach ($status as $row)
        @if ($row->work == 'active')
        <div class="work_section section_padding">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-4">
                    <img class="img-fluid work_img" src="{{ asset('assets/frontend/img/banner/man-1351317_1280.jpg') }}" alt="img">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="work_right">
                        <p>how it works</p>
                        <h2>Join us with <br> three easy steps</h2>
                        <div class="row work_grid">
                            <div class="col-xl-2 col-lg-2 col-md-2">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <h5>Quantum porter</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis,pulvinar dapibus leo.</p>
                            </div>
                        </div>
                        <div class="row work_grid">
                            <div class="col-xl-2 col-lg-2 col-md-2">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <h5>Quantum porter</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis,pulvinar dapibus leo.</p>
                            </div>
                        </div>
                        <div class="row work_grid">
                            <div class="col-xl-2 col-lg-2 col-md-2">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <h5>Quantum porter</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis,pulvinar dapibus leo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        @endif
        @endforeach
        <!-- end -->

        <!-- client comment section -->
        @foreach ($status as $row)
        @if ($row->client == 'active')
        <div class="client_comment_section section_padding">
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-xl-8 col-lg-8 mx-auto">
                                    <div class="client_body text-center">
                                        <!-- comment-img -->
                                        <img width="100px" class="img-fluid" src="{{ asset('assets/frontend/img/comment/bill.png') }}" alt="img">
                                        <!-- emd -->
                                        <p class="text-justify"><img class="com_1" width="27px" src="{{ asset('assets/frontend/img/comment/comma2.png') }}" alt="">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Ut elit tellus, luctus nec ullamcorper mattis,
                                            pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Ut elit tellus, luctus nec ullamcorper mattis,
                                            pulvinar dapibus leo.<img class="com_2" width="27px" src="{{ asset('assets/frontend/img/comment/comma.png') }}" alt=""></p>
                                        <h5>John Doe</h5>
                                        <p>Web Developer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-xl-8 col-lg-8 mx-auto">
                                    <div class="client_body text-center">
                                        <!-- comment-img -->
                                        <img width="100px" class="img-fluid" src="{{ asset('assets/frontend/img/comment/steav.png') }}" alt="img">
                                        <!-- emd -->
                                        <p class="text-justify"><img class="com_1" width="27px" src="{{ asset('assets/frontend/img/comment/comma2.png') }}" alt="">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Ut elit tellus, luctus nec ullamcorper mattis,
                                            pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Ut elit tellus, luctus nec ullamcorper mattis,
                                            pulvinar dapibus leo.<img class="com_2" width="27px" src="{{ asset('assets/frontend/img/comment/comma.png') }}" alt=""></p>
                                        <h5>John Doe</h5>
                                        <p>Web Developer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-xl-8 col-lg-8 mx-auto">
                                    <div class="client_body text-center">
                                        <!-- comment-img -->
                                        <img width="100px" class="img-fluid" src="{{ asset('assets/frontend/img/comment/jackma.png') }}" alt="img">
                                        <!-- emd -->
                                        <p class="text-justify"><img class="com_1" width="27px" src="{{ asset('assets/frontend/img/comment/comma2.png') }}" alt="">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Ut elit tellus, luctus nec ullamcorper mattis,
                                            pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Ut elit tellus, luctus nec ullamcorper mattis,
                                            pulvinar dapibus leo.<img class="com_2" width="27px" src="{{ asset('assets/frontend/img/comment/comma.png') }}" alt=""></p>
                                        <h5>John Doe</h5>
                                        <p>Web Developer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        @endif
        @endforeach
        <!-- end -->

        <!-- team image section -->
        @foreach ($status as $row)
        @if ($row->center_img == 'active')
        <div class="team_img_section section_padding">
            <img style="display: block; width: 100%;" src="{{ asset('assets/frontend/img/banner/biz3-home-bottom-section.png') }}" alt="">
        </div>
        @else
        @endif
        @endforeach
        <!-- end -->

        <!-- feedback section -->
        @foreach ($status as $row)
        @if ($row->feedback == 'active')
        <div class="feedback_section section_padding">
            <div class="container">
                <div class="heading_title text-center">
                    <h4>Our Feedback</h4>
                    <p>Our experts have been featured <br> in press numerous times.</p>

                </div>
                <div class="row grid_system">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 row_padd">
                        <div class="feedback_card">
                            <i class="fas fa-check"></i>
                            <p>Project Submit</p>
                            <h4 class='numscroller' data-min='1' data-max='1000' data-delay='5' data-increment='5'>1000</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 row_padd">
                        <div class="feedback_card">
                            <i class="fas fa-running"></i>
                            <p>Running Project</p>
                            <h4 class='numscroller' data-min='1' data-max='800' data-delay='5' data-increment='5'>800</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 row_padd">
                        <div class="feedback_card">
                            <i class="fa fa fa-users"></i>
                            <p>Total Client</p>
                            <h4 class='numscroller' data-min='1' data-max='600' data-delay='5' data-increment='5'>600</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 row_padd">
                        <div class="feedback_card">
                            <i class="fa fa-smile"></i>
                            <p>Happy Client</p>
                            <h4 class='numscroller' data-min='1' data-max='300' data-delay='5' data-increment='5'>300</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        @endif
        @endforeach
        <!-- end -->

        <!-- owl carousel -->
        @foreach ($status as $row)
        @if ($row->partner == 'active')
        <div class="brand_section section_padding">
            <div class="container">
                <div class="heading_title text-center">
                    <h4>Our Partner</h4>
                    <p>Our experts have been featured <br> in press numerous times.</p>

                </div>
                <div class="brand-slider">
                    <div class="brand-carousel owl-carousel">
                        <div class="single-logo">
                            <img src="{{ asset('assets/frontend/img/brand/brand_icon1.png') }}" alt="">
                        </div>
                        <div class="single-logo">
                            <img src="{{ asset('assets/frontend/img/brand/brand_icon2.png') }}" alt="">
                        </div>
                        <div class="single-logo">
                            <img src="{{ asset('assets/frontend/img/brand/brand_icon3.png') }}" alt="">
                        </div>
                        <div class="single-logo">
                            <img src="{{ asset('assets/frontend/img/brand/brand_icon4.png') }}" alt="">
                        </div>
                        <div class="single-logo">
                            <img src="{{ asset('assets/frontend/img/brand/brand_icon5.png') }}" alt="">
                        </div>
                        <div class="single-logo">
                            <img src="{{ asset('assets/frontend/img/brand/brand_icon3.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        @endif
        @endforeach
        <!-- owl carousel end-->

        <!-- blog section -->
        @foreach ($status as $row)
        @if ($row->blog == 'active')
        <div class="blog_section section_padding">
            <div class="container">
                <div class="heading_title text-center">
                    <h4>Blog</h4>
                    <p>Our experts have been featured <br> in press numerous times.</p>

                </div>
                <div class="row grid_system">
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 row_padd">
                        <div class="blog-card">
                            <img class="card-imgs img-fluid" src="{{ asset('assets/frontend/img/blog/post-02.jpg') }}" alt="Bologna">
                            <div class="card-body">
                                <h5 class="card-title">Pasta with Prosciutto</h5>
                                <small class="text-muted cat">
                                    <i class="far fa-clock text-info"></i> 30 minutes
                                    <i class="fas fa-users text-info"></i> Admin
                                </small>
                                <p class="card-text">I love quick, simple pasta dishes, and this is one of my favorite.</p>
                                <a class="btn btn-sm btn-info" href="#">View Details</a>
                            </div>
                            <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                                <div class="views">Oct 20, 12:45PM
                                </div>
                                <div class="stats">
                                    <i class="far fa-eye"></i> 1347
                                    <i class="far fa-comment"></i> 12
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 row_padd">
                        <div class="blog-card">
                            <img class="card-imgs img-fluid" src="{{ asset('assets/frontend/img/blog/post-03.jpg') }}" alt="Bologna">
                            <div class="card-body">
                                <h5 class="card-title">Pasta with Prosciutto</h5>
                                <small class="text-muted cat">
                                    <i class="far fa-clock text-info"></i> 30 minutes
                                    <i class="fas fa-users text-info"></i> Admin
                                </small>
                                <p class="card-text">I love quick, simple pasta dishes, and this is one of my favorite.</p>
                                <a class="btn btn-sm btn-info" href="#">View Details</a>
                            </div>
                            <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                                <div class="views">Oct 20, 12:45PM
                                </div>
                                <div class="stats">
                                    <i class="far fa-eye"></i> 1347
                                    <i class="far fa-comment"></i> 12
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 row_padd">
                        <div class="blog-card">
                            <img class="card-imgs img-fluid" src="{{ asset('assets/frontend/img/blog/post-04.jpg') }}" alt="Bologna">
                            <div class="card-body">
                                <h5 class="card-title">Pasta with Prosciutto</h5>
                                <small class="text-muted cat">
                                    <i class="far fa-clock text-info"></i> 30 minutes
                                    <i class="fas fa-users text-info"></i> Admin
                                </small>
                                <p class="card-text">I love quick, simple pasta dishes, and this is one of my favorite.</p>
                                <a class="btn btn-sm btn-info" href="#">View Details</a>
                            </div>
                            <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                                <div class="views">Oct 20, 12:45PM
                                </div>
                                <div class="stats">
                                    <i class="far fa-eye"></i> 1347
                                    <i class="far fa-comment"></i> 12
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        @endif
        @endforeach
        <!-- end -->
    </section>
    <!--section end -->
@endsection
{{--end--}}
