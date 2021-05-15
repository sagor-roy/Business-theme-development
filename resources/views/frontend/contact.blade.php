{{--main layout include--}}
@extends('frontend.layout.master')
{{--end--}}

{{--Title--}}
@section('title')
    Contact Page
@endsection
{{--end--}}

{{--start--}}
@section('content')
    <!-- main content start -->
    <section class="content">
        <!-- home section -->
        <div class="contact_home_section">
            <div class="container">
                <div class="contact_home_content text-light">
                    <p>CONTACT US</p>
                    <h3>Feel free <br> to contact us</h3>
                </div>
            </div>
        </div>
        <!-- end -->

        <!-- contact section -->
        <div class="contact_section first_section_padding">
            <div class="container">
                <div class="heading_title text-center text-light">
                    <p class="first_text text-warning">WRITE US</p>
                    <h4>Feel free to contact us <br> for more details</h4>
                </div>
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-9 mx-auto">
                        @if(session('message') || session('errorMessage'))
                            <div class="alert alert-{{ session('message') ? 'success':'danger' }} alert-dismissible fade show" role="alert">
                                <strong>{{ session('message') ? 'Success':'Oops' }} !</strong> {{ session('message')}} {{ session('errorMessage') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="contact_form">
                            <form action="{{ route('store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="custom_field" placeholder="Your name" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="custom_field" placeholder="Your e-mail" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="sub" class="custom_field" placeholder="Subject">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="custom_textarea" placeholder="Message" id="" cols="30" rows="10" required minlength="20"></textarea>
                                </div>
                                <button type="submit" class="submit_btn">Send A Message</button>
                            </form>

                            <p class="text-justify text-light my-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
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

        <!-- google map section -->
        <div class="google_map_section section_padding">
            <p class="mb-5 z-index"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.4660990311822!2d90.35527371429725!3d23.766411194082945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c17fc8b544ff%3A0xa3b5de2c53ac8483!2sHR%20Venture%20AI%3A%20Artificial%20Intelligence%20Course%20in%20Dhaka-Bangladesh!5e0!3m2!1sen!2sbd!4v1618310874149!5m2!1sen!2sbd" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
        </div>
        <!-- end -->
    </section>
    <!--section end -->
@endsection
{{--end--}}
