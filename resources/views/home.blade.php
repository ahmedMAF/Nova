@extends('layout.main')

@section('title', 'Home')

@section('content')
    <!-- Start Main Slides Area -->
    <div class="main-slides-area">
        <div class="home-slides owl-carousel owl-theme owl-loaded owl-drag">
            <div class="owl-stage-outer owl-height" style="height: 784.656px">
                <div class="owl-stage" style="
                                              transform: translate3d(-3789px, 0px, 0px);
                                              transition: all 0s ease 0s;
                                              width: 7580px;
                                            ">
                    <div class="owl-item cloned" style="width: 1263.33px">
                        <div class="main-slides-item">
                            <div class="container-fluid">
                                <div class="row align-items-center">
                                    <div class="col-lg-7 col-md-12">
                                        <div class="main-slides-content">
                                            <span data-aos="fade-right" data-aos-delay="70" data-aos-duration="700"
                                                data-aos-once="true" class="aos-init aos-animate">{{ __('home.h') }}</span>
                                            <h1 data-aos="fade-right" data-aos-delay="70" data-aos-duration="700"
                                                data-aos-once="true" class="aos-init aos-animate">
                                                {{ __('home.iot') }}
                                                <span class="overlay" style="
                                                              transform-origin: left 50% 0px;
                                                              transform: matrix(0, 0, 0, 1, 0, 0);
                                                            "></span>
                                            </h1>
                                            <p data-aos="fade-right" data-aos-delay="70" data-aos-duration="700"
                                                data-aos-once="true" class="aos-init aos-animate">
                                                {{ __('home.iotPart1') }}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-5 col-md-12 aos-init aos-animate" data-aos="fade-down"
                                        data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                                        <div class="main-slides-image" data-tilt=""
                                            style="transform: matrix(1, 0, 0, 1, 0, 0)">
                                            <img style="height: 500px; width: auto;" src="{{asset('image/mainSlideIOT.jpeg')}}" alt="image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 1263.33px">
                        <div class="main-slides-item">
                            <div class="container-fluid">
                                <div class="row align-items-center">
                                    <div class="col-lg-7 col-md-12">
                                        <div class="main-slides-content">
                                            <span data-aos="fade-right" data-aos-delay="70" data-aos-duration="700"
                                                data-aos-once="true" class="aos-init aos-animate">{{ __('home.h') }}</span>
                                            <h1 data-aos="fade-right" data-aos-delay="70" data-aos-duration="700"
                                                data-aos-once="true" class="aos-init aos-animate">
                                                {{ __('home.ai') }}
                                                <span class="overlay" style="
                                                              transform-origin: left 50% 0px;
                                                              transform: matrix(0, 0, 0, 1, 0, 0);
                                                            "></span>
                                            </h1>
                                            <p data-aos="fade-right" data-aos-delay="70" data-aos-duration="700"
                                                data-aos-once="true" class="aos-init aos-animate"></p>
                                            <div>
                                                <p class="MsoNormal">
                                                    {{ __('home.aiPart1') }}
                                                    <br />
                                                </p>
                                            </div>
                                            <p></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-5 col-md-12 aos-init aos-animate" data-aos="fade-down"
                                        data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                                        <div class="main-slides-image" data-tilt=""
                                            style="transform: matrix(1, 0, 0, 1, 0, 0)">
                                            <img style="height: 500px; width: auto;" src="{{asset('image/mainSlideAI.jfif')}}" alt="image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 1263.33px">
                        <div class="main-slides-item">
                            <div class="container-fluid">
                                <div class="row align-items-center">
                                    <div class="col-lg-7 col-md-12">
                                        <div class="main-slides-content">
                                            <span data-aos="fade-right" data-aos-delay="70" data-aos-duration="700"
                                                data-aos-once="true" class="aos-init aos-animate">{{ __('home.h') }}</span>
                                            <h1 data-aos="fade-right" data-aos-delay="70" data-aos-duration="700"
                                                data-aos-once="true" class="aos-init aos-animate">
                                                {{ __('home.programin') }}
                                                <span class="overlay" style="
                                                              transform: matrix(0, 0, 0, 1, 0, 0);
                                                              transform-origin: right 50% 0px;
                                                            "></span>
                                            </h1>
                                            <p data-aos="fade-right" data-aos-delay="70" data-aos-duration="700"
                                                data-aos-once="true" class="aos-init aos-animate">
                                                {{ __('home.programinPart1') }}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-5 col-md-12 aos-init aos-animate" data-aos="fade-down"
                                        data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                                        <div class="main-slides-image" data-tilt=""
                                            style="transform: matrix(1, 0, 0, 1, 0, 0)">
                                            <img style="height: 500px; width: auto;" src="{{asset('image/mainSlideCode.jpeg')}}" alt="image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 1263.33px">
                        <div class="main-slides-item">
                            <div class="container-fluid">
                                <div class="row align-items-center">
                                    <div class="col-lg-7 col-md-12">
                                        <div class="main-slides-content">
                                            <span data-aos="fade-right" data-aos-delay="70" data-aos-duration="700"
                                                data-aos-once="true" class="aos-init aos-animate">{{ __('home.h') }}</span>
                                            <h1 data-aos="fade-right" data-aos-delay="70" data-aos-duration="700"
                                                data-aos-once="true" class="aos-init aos-animate">
                                                {{ __('home.coures') }}
                                                <span class="overlay" style="
                                                              transform: matrix(0, 0, 0, 1, 0, 0);
                                                              transform-origin: right 50% 0px;
                                                            "></span>
                                            </h1>
                                            <p data-aos="fade-right" data-aos-delay="70" data-aos-duration="700"
                                                data-aos-once="true" class="aos-init aos-animate"></p>
                                            <div style="">
                                                <p class="MsoNormal">
                                                    {{ __('home.couresPart1') }}
                                                    <br />
                                                </p>
                                            </div>
                                            <p></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-5 col-md-12 aos-init aos-animate" data-aos="fade-down"
                                        data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                                        <div class="main-slides-image" data-tilt=""
                                            style="transform: matrix(1, 0, 0, 1, 0, 0)">
                                            <img style="height: 500px; width: auto;" src="{{asset('image/mainSlideCoures.jpeg')}}" alt="image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-slides-shape-1">
            <img src="{{asset('image/slides-shape-1.png')}}" alt="image" />
        </div>
        <div class="main-slides-shape-2">
            <img src="{{asset('image/slides-shape-2.png')}}" alt="image" />
        </div>
        <div class="main-slides-shape-3">
            <img src="{{asset('image/slides-shape-3.png')}}" alt="image" />
        </div>
        <div class="main-slides-shape-4">
            <img src="{{asset('image/slides-shape-4.png')}}" alt="image" />
        </div>
        <div class="main-slides-shape-5">
            <img src="{{asset('image/slides-shape-5.png')}}" alt="image" />
        </div>
    </div>
    <!-- End Main Slides Area -->
    <!-- Start About Area -->
    <div class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-image" data-tilt="">
                        <img src="{{asset('image/about.jpg')}}" alt="image" data-aos="fade-down" data-aos-delay="80"
                            data-aos-duration="800" data-aos-once="true" class="aos-init" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-content aos-init" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800"
                        data-aos-once="true">
                        <span>{{ __('about.who') }}</span>
                        <h3>
                            {{ __('about.what') }}
                            <span class="overlay" style="
                                            transform-origin: left 50% 0px;
                                            transform: matrix(0, 0, 0, 1, 0, 0);
                                          "></span>
                        </h3>
                        <p></p>
                        <p class="MsoNormal" style="
                                          text-align: justify;
                                          background-image: initial;
                                          background-position: initial;
                                          background-size: initial;
                                          background-repeat: initial;
                                          background-attachment: initial;
                                          background-origin: initial;
                                          background-clip: initial;
                                          unicode-bidi: embed;
                                        ">
                            {{ __('about.whatWeDo') }}

                            <font face="Open Sans, sans-serif"><span style="font-size: 12pt">
                                    <o:p></o:p>
                                </span></font>
                        </p>
                        <p></p>
                        <div class="about-btn">
                            <a href="{{route('about')}}" class="default-btn">{{ __('home.knowAbout') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end About Area -->
    <!-- Start Services Area -->
    <div class="services-area with-radius ptb-100">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="services-section-content aos-init services-info-ar" data-aos="fade-down" data-aos-delay="80"
                        data-aos-duration="800" data-aos-once="true">
                        <div class="services-bg-text">{{ __('service.services') }}</div>
                        <span>{{ __('service.services') }}</span>
                        <h3>
                            {{ __('service.oureServices') }}
                            <span class="overlay" style="
                                        transform-origin: left 50% 0px;
                                        transform: matrix(0, 0, 0, 1, 0, 0);
                                      "></span>
                        </h3>
                        <p></p>
                        <p align="center" style="
                                      margin: 0in 0in 15pt;
                                      text-align: center;
                                      line-height: 18pt;
                                      background-image: initial;
                                      background-position: initial;
                                      background-size: initial;
                                      background-repeat: initial;
                                      background-attachment: initial;
                                      background-origin: initial;
                                      background-clip: initial;
                                      vertical-align: baseline;
                                    "></p>
                        <div  >
                            <p class="MsoNormal" style="
                                        background-image: initial;
                                        background-position: initial;
                                        background-size: initial;
                                        background-repeat: initial;
                                        background-attachment: initial;
                                        background-origin: initial;
                                        background-clip: initial;
                                        unicode-bidi: embed;
                                      ">
                                {{ __('service.oureServicesPart1') }}
                                <font face="Open Sans, sans-serif"><span style="font-size: 12pt">
                                        <o:p></o:p>
                                    </span></font>
                            </p>
                        </div>
                        <span style="font-family: Cairo, serif; letter-spacing: 0.1pt">
                            <font color="#a1a1a1">
                                <o:p></o:p>
                            </font>
                        </span>
                        <p></p>
                        <p></p>
                        <div class="services-section-btn">
                            <a href="{{route('services')}}" class="default-btn">{{ __('home.exploreService') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="services-slides owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="
                                        transition: all 0s ease 0s;
                                        width: 2767px;
                                        transform: translate3d(-553px, 0px, 0px);
                                      ">

                                @foreach ($services as $service)
                                    <div class="owl-item cloned" style="width: 251.628px; margin-right: 25px">
                                        <div class="services-item">
                                            <div class="services-image custom-image">
                                                <img src="{{asset('storage/' . $service->image)}}" alt="image" />
                                            </div>
                                            <div class="services-content">
                                                <h3>
                                                    <a href="../html/services.html">{{$service->name}}</a>
                                                </h3>
                                                <p>
                                                    {{$service->description}}
                                                </p>
                                                <a href="{{route('service_details' , $service->id)}}" class="services-btn">
                                                    {{__('service.view')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <!-- End Services Area -->
    <!-- Start Projects Area -->
    <div class="projects-area with-black-background pb-75">
        <div class="container">
            <div class="section-title">
                <span>{{ __('project.projetc') }}</span>
                <h2>
                    {{ __('home.ourProjetcs') }}
                    <span class="overlay" style="
                            transform-origin: left 50% 0px;
                            transform: matrix(0, 0, 0, 1, 0, 0);
                          "></span>
                </h2>
                <p></p>
                <p class="MsoNormal" style="line-height: 150%">
                    {{ __('home.ourProjetcs') }}
                    <br />
                </p>
                <p class="MsoNormal" style="line-height: 150%">
                    <span lang="AR-JO" dir="RTL" style="
                            font-family: 'Open Sans', sans-serif;
                            mso-bidi-language: AR-JO;
                          ">
                        <o:p></o:p>
                    </span>
                </p>
                <p></p>
            </div>

            <div class="projects-slides owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="
                            transition: all 0.5s ease 0s;
                            width: 3709px;
                            transform: translate3d(-1568px, 0px, 0px);
                          ">

                        @foreach ($projects as $project)
                            <div class="owl-item cloned" style="width: 260.25px; margin-right: 25px">
                                <div class="projects-item aos-init" data-aos="fade-up" data-aos-delay="50"
                                    data-aos-duration="500" data-aos-once="true">
                                    <div class="projects-image">
                                        <a href="{{route('project_details' , $project->id)}}"><img src="{{asset('storage/' . $project->image)}}"
                                                alt="image" /></a>
                                    </div>
                                    <div class="projects-content">
                                        <h3>
                                            <a href="{{route('project_details' , $project->id)}}">{{$project->name}}</a>
                                        </h3>
                                        <a href="{{route('project_details' , $project->id)}}" class="projects-btn">{{__('project.view')}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <div class="projects-bg-shape-1">
            <img src="../image/slides-shape-1.png" alt="image" />
        </div>
        <div class="projects-shape-1">
            <img src="../image/slides-shape-2.png" alt="image" />
        </div>
        <div class="projects-shape-2">
            <img src="../image/slides-shape-3.png" alt="image" />
        </div>
        <div class="projects-shape-3">
            <img src="../image/slides-shape-4.png" alt="image" />
        </div>
    </div>
    <!-- End Projects Area -->
@endsection