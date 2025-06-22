@extends('layout.main')

@section('title', 'Our Projects')

@section('content')
    @if (session('success'))
        <div class="container alert alert-success alert-dismissible fade show position-fixed start-50 translate-middle-x mt-3 shadow"
            role="alert" style="z-index: 1055; width:100%; top: 70px;">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Start Page Banner Area -->
    <div class="page-banner-area bg-3 jarallax"
        style="background-color: black; position: relative; z-index: 0; background-attachment: scroll; background-size: auto;"
        data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="page-banner-content aos-init aos-animate" data-aos="fade-right" data-aos-delay="50"
                data-aos-duration="500" data-aos-once="true">
                <h2 style="color: white">Our Projects</h2>

                <ul>
                    <li>
                        <a href="../html/index.html">Home</a>
                    </li>
                    <li>Projects</li>
                </ul>
            </div>
        </div>
        <div id="jarallax-container-0"
            style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -100;">
            <div
                style="background-position: 50% 50%; background-size: 100%; background-repeat: no-repeat; position: fixed; top: 0px; left: 0px; width: 1263.33px; height: 710.625px; overflow: hidden; pointer-events: none; margin-left: 0px; margin-top: -53.8125px; visibility: visible; transform: translateY(-30.75px) translateZ(0px);">
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Blog Area -->
    <div class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row justify-content-center">

                        @foreach ($projects as $project)
                            <div class="col-lg-6 col-md-6">
                                <div class="single-blog-card">
                                    <div class="blog-image">
                                        <a class="prevent" href="{{route('project_details' , $project->id)}}"><img src="{{asset('storage/' . $project->image)}}" alt="image"></a>

                                        <div class="date">{{$project->date}}</div>
                                    </div>
                                    <div class="blog-content">
                                        <h3>
                                            <a class="prevent" href="#">{{$project->name}}</a>
                                        </h3>
                                        <p>{{$project->description}}</p>
                                        <a href="{{route('project_details' , $project->id)}}" class="blog-btn show">View More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="page" style="width: fit-content; margin: auto;">
                {{ $projects->links() }}
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start Talk Area -->
    <div class="talk-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12 m-auto">
                    <div class="talk-content margin-zero">
                        <span>LET'S TALK</span>
                        <h3>Contact<span class="overlay"
                                style="transform-origin: left 50% 0px; transform: matrix(0, 0, 0, 1, 0, 0);"></span></h3>
                        <p></p>
                        <p style="text-align: justify;">Whether you have a query about our services, or need any
                            assistance, our team is ready to answer your questions. We’d love to hear from
                            you.<br></p>
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
                                                data-error="Please enter your name" placeholder="Your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" required=""
                                                data-error="Please enter your email" placeholder="Your email address">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" cols="30" rows="6" required=""
                                                data-error="Please enter your message"
                                                placeholder="Write your message..."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn disabled"
                                            style="pointer-events: all; cursor: pointer;">Send Message<span></span></button>


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

    <!-- Start Overview Area -->
    <div class="overview-area pt-100 pb-75">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="overview-card">
                        <h3>Call Us</h3>
                        <span>
                            <a href="tel:9901234567">0597456498</a>
                        </span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="overview-card">
                        <h3>Email Us</h3>
                        <span>
                            <a href="../html/contact.html"><span style="margin: 0px;" class="__cf_email__"
                                    data-cfemail="650d0c060a1f00250208040c094b060a08">nova.integrated.solutions@gmail.com</span></a>
                        </span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="overview-card">
                        <h3>Tech Support</h3>
                        <span>
                            <a href="tel:15143125678">0597456498</a>
                        </span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="overview-card">
                        <h3>Visit Us</h3>
                        <span>Palestine Gaza Khanyounis</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Overview Area -->
@endsection