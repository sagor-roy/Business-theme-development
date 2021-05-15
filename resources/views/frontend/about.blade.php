{{--main layout include--}}
@extends('frontend.layout.master')
{{--end--}}

{{--Title--}}
@section('title')
    About Page
@endsection
{{--end--}}

{{--start--}}
@section('content')
    <!-- main content start -->
    <section class="content">
        <!-- home section -->
        <div class="about_home_section">
            <div class="container">
                <div class="about_home_content text-center text-light">
                    <p>ABOUT US</p>
                    <h3>We are an experienced <br> team of financial experts </h3>
                </div>
            </div>
        </div>
        <!-- end -->

        <!-- our offer section -->
        <div class="offer_section first_section_padding">
            <div class="container">
                <div class="heading_title text-center">
                    <p class="first_text text-warning">our offer</p>
                    <h4>Check what can we do for you <br> and your business</h4>

                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="left_content">
                            <h4 class="font-weight-bold pb-2">Etiam sagittis</h4>
                            <p class="text-justify">Sagittis augue eu vehicula. Nulla ultrices nunc id consequat consectetur. Phasellus pharetra augue sit amet lorem sagittis lacinia. Aliquam auctor lectus sem, et elementum velit viverra at. In a commodo dolor. <br><br>

                                Phasellus commodo ornare neque quis dictum. Phasellus sed lacus vestibulum, tincidunt metus vitae, placerat magna. Nullam a ex eget erat lacinia laoreet eu non risus. Nulla facilisi. Sed sodales ligula non nibh fermentum pretium. Praesent commodo purus et malesuada accumsan. Nunc faucibus imperdiet vestibulum. Quisque eu urna non arcu ultrices convallis eget eu est. Fusce sit amet congue odio.</p>

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="right_content">
                            <h4 class="font-weight-bold pb-2">Etiam sagittis</h4>
                            <p class="text-justify">Sagittis augue eu vehicula. Nulla ultrices nunc id consequat consectetur. Phasellus pharetra augue sit amet lorem sagittis lacinia. Aliquam auctor lectus sem, et elementum velit viverra at. In a commodo dolor. <br><br>

                                Phasellus commodo ornare neque quis dictum. Phasellus sed lacus vestibulum, tincidunt metus vitae, placerat magna. Nullam a ex eget erat lacinia laoreet eu non risus. Nulla facilisi. Sed sodales ligula non nibh fermentum pretium. Praesent commodo purus et malesuada accumsan. Nunc faucibus imperdiet vestibulum. Quisque eu urna non arcu ultrices convallis eget eu est. Fusce sit amet congue odio.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->

        <!-- client comment section -->
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
        <!-- end -->

        <!-- why choose us section -->
        <div class="why_choose_us_section first_section_padding">
            <div class="container">
                <div class="heading_title text-center">
                    <h4>Why choose us?</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, <br>luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>

                </div>
                <div class="row grid_system">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 row_padd">
                        <div class="choose_card text-center">
                            <img width="50%" class="img-fluid" src="img/service/i3.png" alt="Img">
                            <h5>Mobile Service</h5>
                            <p>Ed minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 row_padd">
                        <div class="choose_card text-center">
                            <img width="50%" class="img-fluid" src="img/service/i1.png" alt="Img">
                            <h5>Data recovery</h5>
                            <p>Ed minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 row_padd">
                        <div class="choose_card text-center">
                            <img width="50%" class="img-fluid" src="img/service/i2.png" alt="Img">
                            <h5>Computer repair</h5>
                            <p>Ed minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 row_padd">
                        <div class="choose_card text-center">
                            <img width="50%" class="img-fluid" src="img/service/i4.png" alt="Img">
                            <h5>Network solutions</h5>
                            <p>Ed minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->

        <!-- experienc staff section -->
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
        <!-- end -->

        <!-- how it work section -->
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
        <!-- end -->

        <!-- owl carousel -->
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
        <!-- owl carousel end-->
    </section>
    <!--section end -->
@endsection
{{--end--}}
