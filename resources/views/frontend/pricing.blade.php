{{--main layout include--}}
@extends('frontend.layout.master')
{{--end--}}

{{--Title--}}
@section('title')
    Pricing Page
@endsection
{{--end--}}

{{--start--}}
@section('content')
    <!-- main content start -->
    <section class="content">
        <!-- home section -->
        <div class="pricing_home_section mb-5">
            <div class="pricing_home_content text-center text-light">
                <p>PRICING</p>
                <h3>Choose your plan</h3>
            </div>
        </div>
        <!-- end -->

        <!-- pricing section -->
        <div class="pricing_section first_section_padding">
            <div class="container">
                <div class="heading_title">
                    <p class="first_text text-warning">PRICING PLAN</p>
                    <h4>Choose your plan <br> and star earning money today</h4>
                </div>
                <div class="pricing">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="pricing_card">
                                <div class="pricing_head">
                                    <h3>Starter</h3>
                                    <p>The best to start</p>
                                </div>
                                <div class="pricing_body">
                                    <div class="pricing_body_head">
                                        <h4>$ <strong class="price">180</strong>/Per Month</h4>
                                    </div>
                                    <p>Fast service</p>
                                    <p>Safe payments</p>
                                    <p>Fully trained employees</p>
                                    <p>Sustainable products</p>
                                </div>
                                <div class="footer_btn">
                                    <a href="#" class="pricing_btn">Get Started</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="pricing_card">
                                <div class="pricing_head head_bg">
                                    <h3>Professional</h3>
                                    <p>The best to start</p>
                                </div>
                                <div class="pricing_body">
                                    <div class="pricing_body_head">
                                        <h4>$ <strong class="price">280</strong>/Per Month</h4>
                                    </div>
                                    <p>Fast service</p>
                                    <p>Safe payments</p>
                                    <p>Fully trained employees</p>
                                    <p>Sustainable products</p>
                                </div>
                                <div class="footer_btn">
                                    <a href="#" class="pricing_btn">Get Started</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="pricing_card">
                                <div class="pricing_head">
                                    <h3>Business</h3>
                                    <p>The best to start</p>
                                </div>
                                <div class="pricing_body">
                                    <div class="pricing_body_head">
                                        <h4>$ <strong class="price">380</strong>/Per Month</h4>
                                    </div>
                                    <p>Fast service</p>
                                    <p>Safe payments</p>
                                    <p>Fully trained employees</p>
                                    <p>Sustainable products</p>
                                </div>
                                <div class="footer_btn">
                                    <a href="#" class="pricing_btn">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end-->

        <!-- how it work section -->
        <div class="work_section pricing_section_padding">
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

        <!-- contact section -->
        <div class="contact_section section_padding">
            <div class="container">
                <div class="heading_title text-center text-light">
                    <p class="first_text text-warning">WRITE US</p>
                    <h4>Feel free to contact us <br> for more details</h4>
                </div>
                <div class="row my-5">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="contact_footer_left text-center">
                            <p class="first_text text-warning">WRITE US</p>
                            <h4>+43 600 495 949</h4>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="contact_footer_right text-center">
                            <p class="first_text text-warning">E-MAIL US</p>
                            <h4>hrventurebd@gmail.com</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->


    </section>
    <!--section end -->
@endsection
{{--end--}}
