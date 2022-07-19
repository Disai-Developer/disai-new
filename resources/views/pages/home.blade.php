@extends('layouts.default')
<!DOCTYPE html>
<title>DISAI</title>
@section('content')
    <div class="col-12 px-0">
        <!-- image section -->
        {{-- <div class="col-12 px-0">
        <div class="col-12 px-0 owl-carousel owl-theme image_slide2 bg-head-img">
            <div class="overflow-hidden">
                <img src="assets/images/about.jpeg" id="myVideo" class="w-100 zoom">
            </div>
            <div class="overflow-hidden">
                <img src="assets/images/c2.jpg" id="myVideo" class="w-100 zoom">
            </div>
            <div class="overflow-hidden">
                <img src="assets/images/c3.jpg" id="myVideo" class="w-100 zoom">
            </div>
            <div class="overflow-hidden">
                <img src="assets/images/c4.jpeg" id="myVideo" class="w-100 zoom">
            </div>
        </div>
        <div class="content d-flex justify-content-center align-items-center">
            <div class="position-relative">
                <!-- <h1 class="disai-head">Disai Disai Disai</h1> -->
            </div>
        </div>
    </div> --}}
        <!-- text session2 in disai -->
        <div class="col-12 px-3 my-2">
            <div class="d-flex">
                <h1 class="mx-auto font-bold mb-0 font3 heading2">Overview</h1>
            </div>
        </div>
        <div class="col-12 px-3 text-center mb-lg-4 mb-3">
            <p class="well-p px-0 px-md-5 mb-0">
                <span class="font_bold pr-2">Digital Security Association of India</span>(DiSAI) is a non-profit NGO
                registered as a public
                trust to create awareness on digital security. DiSAI was originally started as the fourth
                initiative of the monthly e-magazine ‘PreSense’ published by Prime Point Foundation, the
                other three being Sansad Ratna Awards (jointly with IIT Madras) for honoring outstanding
                MPs, Education Loan Task Force (for creating awareness among students and parents on
                education loans) and Digital Journalists Association of India (focusing on digital journalism),
                which also includes Next Generation Political Leaders (NGPL), for grooming young political
                aspirants. DiSAI has since become an independent organisation on its own, out of the
                PrimePoint Foundation.
            </p>
        </div>
        <div class="col-12 px-3 my-2">
            <div class="d-flex">
                <h1 class="mx-auto font-bold mb-0 font3 heading2">Vision</h1>
            </div>
        </div>
        <div class="col-12 px-3 text-center mb-lg-4 mb-3">
            <p class="well-p px-0 px-md-5 mb-0">
                To strive ceaselessly in creating a digitally secure society in India.
            </p>
        </div>
        <div class="col-12 px-3 my-2">
            <div class="d-flex">
                <h1 class="mx-auto font-bold mb-0 font3 heading2">Mission</h1>
            </div>
        </div>
        <div class="col-12 px-3 text-center mb-lg-4 mb-3">
            <p class="well-p px-0 px-md-5 mb-0">
                To create awareness in the society on the various components of digital security.
            </p>
        </div>
        <!-- session3 in disai -->
        <!-- doctor section -->
        <div class="col-12 p-0 mb-lg-4">
            <div class="my-2">
                <div class="col-12 px-3">
                    <div class="d-flex">
                        <h1 class="mx-auto font-bold mb-0 font3 heading2">DISAI</h1>
                    </div>
                </div>
            </div>
            <div class="container mt-3">
                <div class="col-12">
                    <div class="d-flex row m-0 doctors_card">
                        <div class="col-md-4 my-3 my-lg-0">
                            <div class="card card-shadow">
                                <div class="doctor">
                                    <img class="card-img-top o-cover c-img"
                                        src="{{ url('assets/images/digital_security.jpeg') }}">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center font-bold">Digital Security in India: Emerging Threats
                                    </h5>
                                    <p class="card-text text-center heal-para mb-1">Workshop on "Digital Security in India:
                                        Emerging Threats" is going to be held on 23rd July, 2022 at Raman Auditorium, AC Tech
                                        Building, Anna University Campus, Chennai.</p>
                                    <div class="text-center d-flex flex-column flex-lg-row justify-content-between mt-lg-3">
                                        <div >
                                            <a href="{{ url('assets/files/Brochure.pdf') }}" download
                                            class="bold_font font-9 text-decor-none dark-text-color position-relative stylish_link">
                                            <button type="button" class="btn  semi_font_bold">View Brochure</button></a>
                                        </div>
                                        <div class="my-3 my-lg-0">
                                            <a href="{{ url('assets/files/Schedule.docx') }}" download
                                            class="bold_font font-9 text-decor-none dark-text-color position-relative stylish_link">
                                            <button type="button" class="btn  semi_font_bold">View Schedule</button></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 my-3 my-lg-0">
                            <div class="card card-shadow">
                                <div class="doctor ">
                                    <img class="card-img-top o-cover c-img"
                                        src="{{ url('assets/images/post_cyber.jpeg') }}">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center font-bold">Recent Trends in Cyber Crimes</h5>
                                    <p class="card-text text-center heal-para mb-1">Lecture Session on "Recent Trends in
                                        Cyber Crimes." was conducted on 23 May 2022 in association with MMA, Chennai.</p>
                                    <div class="text-center mt-lg-3">
                                        <a href="{{ url('/events') }}#cyber"
                                            class="bold_font font-9 text-decor-none dark-text-color position-relative stylish_link">
                                            <button type="button" class="btn  semi_font_bold">View
                                                More</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 my-3 my-lg-0">
                            <div class="card card-shadow">
                                <div class="doctor ">
                                    <img class="card-img-top o-cover c-img" src="{{ url('assets/images/d1.jpeg') }}">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center font-bold">Webinar on Womens’ Day</h5>
                                    <p class="card-text text-center heal-para mb-1">Webinar on Womens’ Day in association
                                        with SRM, Ramapuram, Chennai.</p>
                                    <div class="text-center mt-lg-3">
                                        <a href="{{ url('/events') }}"
                                            class="bold_font font-9 text-decor-none dark-text-color position-relative stylish_link">
                                            <button type="button" class="btn  semi_font_bold">View
                                                More</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-4 my-3 my-lg-0">
                        <div class="card card-shadow">
                            <div class="doctor">
                                <img class="card-img-top o-cover c-img" src="{{ url('assets/images/sec.jpg') }}">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center font-bold">Securing India in Cyber Space</h5>
                                <p class="card-text text-center heal-para mb-1">Participation as a supporting partner with MMA, Chennai on “Securing India in Cyber Space” on 20 Oct 2021. </p>
                                <div class="text-center mt-lg-3">
                                    <a href="{{ url('/events') }}"
                                        class="bold_font font-9 text-decor-none dark-text-color position-relative stylish_link">
                                        <button type="button" class="btn  semi_font_bold">View
                                            More</button></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                        {{-- <div class="col-md-4 my-3 my-lg-0">
                        <div class="card card-shadow">
                            <div class="doctor c-img">
                                <img class="card-img-top o-cover h-100" src="assets/images/third.jpg">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center font-bold">Shri Dr.Subramaniam Swamy </h5>
                                <p class="card-text text-center heal-para mb-1">Webinar on “Digital Security in India” with Dr Subramaniam Swamy on 3 June 2021</p>
                                <div class="text-center mt-lg-3">
                                    <a href="{{ url('/events') }}"
                                        class="bold_font font-9 text-decor-none dark-text-color position-relative stylish_link">
                                        <button type="button" class="btn  semi_font_bold">View
                                            More</button></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('includes.footer')
    <!-- </div> -->
@stop
