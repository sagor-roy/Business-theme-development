{{--main layout include--}}
@extends('frontend.layout.master')
{{--end--}}

{{--Title--}}
@section('title')
    Product Detail
@endsection
{{--end--}}

{{--start--}}
@section('content')
    <!-- main content start -->
    <section class="content">
        <!-- home section -->
        <div class="service_home_section">
            <div class="service_home_content text-center text-light">
                <p>product detail</p>
                @foreach($detail as $row)
                <h3>{{ $row->title }}</h3>
                @endforeach
            </div>
        </div>
        <!-- end -->

        <!-- product detail section -->
        <div class="service_section first_section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8">
                        @foreach($detail as $row)
                        <div class="service_detail_card">
                            <div class="iline_content">
                                <img width="50%" class="img-fluid float-left mr-3" src="{{ asset($row->img) }}" alt="">
                                <h5 class="font-weight-bold">{{ $row->title }}</h5>
                                <p class="text-justify">
                                    {{ strip_tags($row->content) }}
                                </p>
                            </div>
                        </div>
                        @endforeach

                        <div class="other_post mt-5">
                            <div class="others_head_btn">others</div>
                            <div class="row grid_system">
                                @foreach($other as $row)
                                <div class="col-sm-6 row_padd">
                                    <div class="blog-card pro_card my-3">
                                        <img class="card-imgs img-fluid" src="{{ asset($row->img) }}" alt="Bologna">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $row->title }}</h5>
                                            <p class="card-text text-justify pro_desc">{{ strip_tags(substr($row->content,0,185).'.....') }}</p>
                                            <a class="btn btn-sm btn-info" href="{{ route('proDetail',$row->slug) }}">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="our_service">
                            <h5>RECENT POST</h5>
                            <ul>
                                @foreach($recent as $row)
                                <li><a href="{{ route('proDetail',$row->slug) }}"><i class="fa fa-angle-right mr-1"></i>{{ $row->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="tag mt-5">
                            <h5>TAG</h5>
                            <a href="#">HTML</a>
                            <a href="#">CSS</a>
                            <a href="#">JS</a>
                            <a href="#">PHP</a>
                            <a href="#">LARAVEL</a>
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
