@extends('layout.main')

@section('title', __('about.title'))

@section('meta')
    <meta name="description" content="{{ __('about.meta') }}">
@endsection

@section('content')
    <!-- Start Page Banner Area -->
    <div class="page-banner-area jarallax"
        style="background-color: black; position: relative; z-index: 0; background-attachment: scroll; background-size: auto;"
        data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="page-banner-content aos-init aos-animate" data-aos="fade-right" data-aos-delay="50"
                data-aos-duration="500" data-aos-once="true">
                <h2 style="color: white">{{ __('about.about') }}</h2>

                <ul>
                    <li>
                        <a href="{{route('about')}}">{{ __('about.home') }}</a>
                    </li>
                    <li>{{ __('about.about') }}</li>
                </ul>
            </div>
        </div>
        <div id="jarallax-container-0"
            style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -100;">
            <div
                style="background-position: 50% 50%; background-size: 100%; background-repeat: no-repeat; position: fixed; top: 0px; left: 0px; width: 1626.13px; height: 541.5px; overflow: hidden; pointer-events: none; margin-left: -181.396px; margin-top: 30.75px; visibility: visible; transform: translateY(-30.75px) translateZ(0px);">
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start About Area -->
    <div class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-image" data-tilt=""
                        style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
                        <img src="{{asset('image/about.jpg')}}" alt="image" data-aos="fade-down" data-aos-delay="80"
                            data-aos-duration="800" data-aos-once="true" class="aos-init aos-animate">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-content aos-init aos-animate" data-aos="fade-up" data-aos-delay="80"
                        data-aos-duration="800" data-aos-once="true">
                        <span>{{ __('about.who') }}</span>
                        <h3>{{ __('about.what') }}<span class="overlay"
                                style="transform: matrix(0, 0, 0, 1, 0, 0); transform-origin: left 50% 0px;"></span></h3>
                        <p></p>
                        <p class="MsoNormal"
                            style="text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; unicode-bidi: embed;">
                            {{ __('about.whatWeDo') }}
                            <font face="Open Sans, sans-serif"><span style="font-size: 12pt;">
                                    <o:p></o:p>
                                </span></font>
                        </p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End About Area -->

    <!-- Start About Area -->
    <div class="about-area pt-100 pb-75">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-wrap-image" data-tilt="" style="will-change: transform;">
                        <img src="{{asset('image/aboutGoal.jpg')}}" alt="image" data-aos="fade-down" data-aos-delay="80"
                            data-aos-duration="800" data-aos-once="true" class="aos-init aos-animate">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-wrap-content aos-init aos-animate" data-aos="fade-up" data-aos-delay="80"
                        data-aos-duration="800" data-aos-once="true">
                        <span>{{ __('about.goal') }}</span>
                        <h3>{{ __('about.goalAnd') }}<span class="overlay"
                                style="transform: matrix(0, 0, 0, 1, 0, 0); transform-origin: left 50% 0px;"></span></h3>
                        <p></p>
                        <h3 style="margin: 0in 0in 15pt; line-height: 150%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;"
                            class="">
                            <p
                                style="text-align: justify; margin: 0in 0in 15pt; line-height: 150%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;">
                                {{ __('about.goalAndPart1') }}
                                <o:p></o:p>
                            </p>
                            <p
                                style="margin: 0in 0in 15pt; line-height: 150%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;">

                            </p>
                            <p
                                style="text-align: justify; margin: 0in 0in 15pt; line-height: 150%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;">
                                {{ __('about.goalAndPart2') }}
                            </p>
                            <p
                                style="margin: 0in 0in 15pt; line-height: 150%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;">
                                <span style="font-family: &quot;Open Sans&quot;, sans-serif;">
                                    <o:p></o:p>
                                </span>
                            </p>
                        </h3>
                        <p
                            style="margin: 0in 0in 15pt; line-height: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;">

                        </p>
                        <p></p>
                    </div>
                </div>
            </div>

            <div class="about-inner-box">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-about-card aos-init aos-animate" data-aos="fade-up" data-aos-delay="80"
                            data-aos-duration="800" data-aos-once="true">
                            <h3>{{ __('about.ourVision') }}</h3>
                            <p></p>
                            <p
                                style="margin: 0in 0in 15pt; line-height: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;">
                                {{ __('about.vision') }}<br>
                            </p>
                            <p></p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-about-card aos-init aos-animate" data-aos="fade-down" data-aos-delay="70"
                            data-aos-duration="700" data-aos-once="true">
                            <h3>{{ __('about.ourMission') }}</h3>
                            <p></p>
                            <p class="MsoNormal" style="text-align: justify; line-height: 150%;">
                                {{ __('about.mission') }}
                            </p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->

    <div class="choose-area pt-100 pb-75">
        <div class="container">
            <div class="section-title">
                <span>{{ __('about.shoose') }}</span>
                <h2>
                    {{ __('about.shoosePart1') }}
                    <span class="overlay" style="
                                transform-origin: left 50% 0px;
                                transform: matrix(0, 0, 0, 1, 0, 0);
                              "></span>
                </h2>
                <p></p>
                <h1 style="line-height: 150%" class="">
                    <p class="MsoNormal" style="
                                background-image: initial;
                                background-position: initial;
                                background-size: initial;
                                background-repeat: initial;
                                background-attachment: initial;
                                background-origin: initial;
                                background-clip: initial;
                                direction: ltr;
                                unicode-bidi: embed;
                              ">
                        {{ __('about.shoosePart2') }}
                        <font face="Open Sans, sans-serif"><span style="font-size: 12pt">
                                <o:p></o:p>
                            </span></font>
                    </p>
                </h1>
                <p></p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-choose-card aos-init" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500"
                        data-aos-once="true">
                        <div class="choose-image" data-tilt="">
                            <a href="{{route('home')}}"><img
                                    src="{{asset('image/Ziar1VrkIiAJE8yrWiyIZTKyDVzte1QK4ufIuZMm.png')}}"
                                    alt=" image" /></a>
                        </div>
                        <div class="choose-content">
                            <h3>
                                {{ __('about.excellence') }}
                            </h3>
                            <p></p>
                            <div style="text-align: justify">
                                {{ __('about.excellencePart1') }}
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-choose-card aos-init" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500"
                        data-aos-once="true">
                        <div class="choose-image" data-tilt="">
                            <a href="{{route('home')}}"><img
                                    src="{{asset('image/mv5MUSz3BO1ZdImmoKRZFA7wywV93EZdHyAUfH7A.png')}}"
                                    alt=" image" /></a>
                        </div>
                        <div class="choose-content">
                            <h3>
                                {{ __('about.commitment') }}
                            </h3>
                            <p></p>
                            <div style="text-align: justify">
                                {{ __('about.commitmentPart1') }}
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-choose-card aos-init" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500"
                        data-aos-once="true">
                        <div class="choose-image" data-tilt="">
                            <a href="{{route('home')}}"><img
                                    src="{{asset('image/k2mPAdhe3yfadl3R35APCMq4PLwkBk615EzGDJqQ.png')}}"
                                    alt=" image" /></a>
                        </div>
                        <div class="choose-content">
                            <h3>
                                 {{ __('about.teamwork') }}
                            </h3>
                            <p></p>
                            <div style="text-align: justify">
                                {{ __('about.teamworkPart1') }}
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-choose-card aos-init" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500"
                        data-aos-once="true">
                        <div class="choose-image" data-tilt="">
                            <a href="{{route('home')}}"><img
                                    src="{{asset('image/decTe7YkYPePp0G4TSZyAGovB85Yi9tTuNmKYi7X.png')}}"
                                    alt=" image" /></a>
                        </div>
                        <div class="choose-content">
                            <h3>
                            {{ __('about.creativity') }}
                            </h3>
                            <p></p>
                            <div style="text-align: justify">
                                {{ __('about.creativityPart1') }}
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-choose-card aos-init" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500"
                        data-aos-once="true">
                        <div class="choose-image" data-tilt="">
                            <a href="{{route('home')}}"><img
                                    src="{{asset('image/sFL2jkR1CC43rPNzB0QiUhKidGgQdQz4raiik3ft.png')}}"
                                    alt=" image" /></a>
                        </div>
                        <div class="choose-content">
                            <h3>
                                {{ __('about.passion') }}
                            </h3>
                            <p></p>
                            <div style="text-align: justify">
                                {{ __('about.passionPart1') }}
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-choose-card aos-init" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500"
                        data-aos-once="true">
                        <div class="choose-image" data-tilt="">
                            <a href="{{route('home')}}"><img
                                    src="{{asset('image/33dJZH0ohwVRfdXVLH1Ro2SstEO4qePp0STU4Ywi.png')}}"
                                    alt=" image" /></a>
                        </div>
                        <div class="choose-content">
                            <h3>
                               {{ __('about.integrity') }}
                            </h3>
                            <p></p>
                            <div style="text-align: justify">
                                {{ __('about.integrityPart1') }}
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-choose-card aos-init" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500"
                        data-aos-once="true">
                        <div class="choose-image" data-tilt="">
                            <a href="{{route('home')}}"><img
                                    src="{{asset('image/9kHL2vfSqYS15orB5H93AdDZtETO2mGBhNOeKbSL.png')}}"
                                    alt=" image" /></a>
                        </div>
                        <div class="choose-content">
                            <h3>
                              {{ __('about.innovation') }}
                            </h3>
                            <p></p>
                            <div style="text-align: justify">
                                {{ __('about.innovationPart1') }}
                            </div>
                            <div></div>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-choose-card aos-init" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500"
                        data-aos-once="true">
                        <div class="choose-image" data-tilt="">
                            <a href="{{route('home')}}"><img
                                    src="{{asset('image/An9T3tDQAyAU4LS7gG1nOWzuA4jkHoNWpEzVd9w3.png')}}"
                                    alt=" image" /></a>
                        </div>
                        <div class="choose-content">
                            <h3>
                              {{ __('about.quality') }}
                            </h3>
                            <p></p>
                            <div style="text-align: justify">
                                {{ __('about.qualityPart1') }}
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End skiil Area -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12">
                <div class="skill-content">
                    <span>{{ __('about.skillset') }}</span>
                    <h3>{{ __('about.skillsetPart1') }}<span class="overlay"
                            style="transform-origin: left 50% 0px; transform: matrix(0, 0, 0, 1, 0, 0);"></span></h3>
                </div>

                <div class="skill-bar aos-init" data-percentage="97%" data-aos="fade-up" data-aos-delay="50"
                    data-aos-duration="500" data-aos-once="true">
                    <p class="progress-title-holder">
                        <span class="progress-title">{{ __('about.iot') }}</span>
                        <span class="progress-number-wrapper">
                            <span class="progress-number-mark iot-right" style="left: 97%;">
                                <span class="percent">97%</span>
                                <span class="down-arrow"></span>
                            </span>
                        </span>
                    </p>
                    <div class="progress-content-outter">
                        <div class="progress-content" style="width: 97%;"></div>
                    </div>
                </div>

                <div class="skill-bar aos-init" data-percentage="95%" data-aos="fade-up" data-aos-delay="60"
                    data-aos-duration="600" data-aos-once="true">
                    <p class="progress-title-holder">
                        <span class="progress-title">{{ __('about.web') }}</span>
                        <span class="progress-number-wrapper">
                            <span class="progress-number-mark web-right" style="left: 95%;">
                                <span class="percent">95%</span>
                                <span class="down-arrow"></span>
                            </span>
                        </span>
                    </p>
                    <div class="progress-content-outter bg-D5158F">
                        <div class="progress-content bg-D5158F" style="width: 95%;"></div>
                    </div>
                </div>

                <div class="skill-bar aos-init" data-percentage="93%" data-aos="fade-up" data-aos-delay="70"
                    data-aos-duration="700" data-aos-once="true">
                    <p class="progress-title-holder">
                        <span class="progress-title">{{ __('about.mobile') }}</span>
                        <span class="progress-number-wrapper">
                            <span class="progress-number-mark mobile-right" style="left: 93%;">
                                <span class="percent">93%</span>
                                <span class="down-arrow"></span>
                            </span>
                        </span>
                    </p>
                    <div class="progress-content-outter bg-FEB302">
                        <div class="progress-content bg-FEB302" style="width: 93%;"></div>
                    </div>
                </div>

                <div class="skill-bar aos-init" data-percentage="97%" data-aos="fade-up" data-aos-delay="80"
                    data-aos-duration="800" data-aos-once="true">
                    <p class="progress-title-holder">
                        <span class="progress-title">{{ __('about.desktop') }}</span>
                        <span class="progress-number-wrapper">
                            <span class="progress-number-mark desktop-right" style="left: 97%;">
                                <span class="percent">97%</span>
                                <span class="down-arrow"></span>
                            </span>
                        </span>
                    </p>
                    <div class="progress-content-outter bg-A66BFF">
                        <div class="progress-content bg-A66BFF" style="width: 97%;"></div>
                    </div>
                </div>
                <div class="skill-bar aos-init" data-percentage="95%" data-aos="fade-up" data-aos-delay="50"
                    data-aos-duration="500" data-aos-once="true">
                    <p class="progress-title-holder">
                        <span class="progress-title">{{ __('about.ai') }}</span>
                        <span class="progress-number-wrapper">
                            <span class="progress-number-mark ai-right" style="left: 95%;">
                                <span class="percent">95%</span>
                                <span class="down-arrow"></span>
                            </span>
                        </span>
                    </p>
                    <div class="progress-content-outter">
                        <div class="progress-content" style="width: 95%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Skill Area -->

    <!-- Start Talk Area -->
    <div class="talk-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12 m-auto">
                    <div class="talk-content margin-zero">
                        <span>{{ __('contact.talk') }}</span>
                        <h3>{{ __('contact.contact') }}<span class="overlay"
                                style="transform-origin: left 50% 0px; transform: matrix(0, 0, 0, 1, 0, 0);"></span></h3>
                        <p></p>
                        <p style="text-align: justify;">
                            {{ __('contact.talkPart1') }}
                        <br></p>
                        <p class="MsoNormal"
                            style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; direction: ltr; unicode-bidi: embed;">
                            <o:p></o:p>
                        </p>
                        <p></p>

                        <form action="https://formspree.io/f/xyzezaoe" method="post">
                            <input type="hidden" value="KE1FBRWJqSJ5Rl0GflJd3GPetPqRdPKG8TCg25Jl">
                            <div id="contactFormTwo" novalidate="true">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" required=""
                                                data-error="{{__('contact.nameErorr')}}" placeholder="{{ __('contact.name') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" required=""
                                                data-error="{{__('contact.emailErorr')}}" placeholder="{{ __('contact.yourEmail') }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" cols="30" rows="6" required=""
                                                data-error="{{__('contact.messageErorr')}}"
                                                placeholder="{{ __('contact.message') }}"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn disabled"
                                            style="pointer-events: all; cursor: pointer;">{{ __('contact.send') }}<span></span></button>


                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Talk Area -->
@endsection