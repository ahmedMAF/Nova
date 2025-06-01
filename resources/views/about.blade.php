@extends('layout.main')

@section('title', 'About Us')

@section('content')
    <!-- Start Page Banner Area -->
    <div class="page-banner-area jarallax"
        style="background-color: black; position: relative; z-index: 0; background-attachment: scroll; background-size: auto;"
        data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="page-banner-content aos-init aos-animate" data-aos="fade-right" data-aos-delay="50"
                data-aos-duration="500" data-aos-once="true">
                <h2 style="color: white">About Us</h2>

                <ul>
                    <li>
                        <a href="../html/index.html">Home</a>
                    </li>
                    <li>About Us</li>
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
                        <span>WHO WE ARE</span>
                        <h3>What We Do<span class="overlay"
                                style="transform: matrix(0, 0, 0, 1, 0, 0); transform-origin: left 50% 0px;"></span></h3>
                        <p></p>
                        <p class="MsoNormal"
                            style="text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; direction: ltr; unicode-bidi: embed;">
                            At NOVA, we dedicate our efforts to turning ideas into reality through innovative technological
                            solutions. Our expertise includes developing websites, mobile applications, and desktop
                            applications, ensuring that every project is designed to meet the unique needs of our clients.
                            We harness the power of artificial intelligence (AI) in our projects to enhance efficiency
                            and improve decision-making, providing customized solutions that analyze data and help
                            create effective strategies. We also implement Internet of Things (IoT) projects that create
                            interconnected environments, allowing you to control devices and exchange information
                            seamlessly.
                            Additionally, we empower the next generation of innovators through comprehensive training
                            programs that equip them with the skills needed to excel in a rapidly evolving digital world.
                            With
                            NOVA, your vision becomes our mission!

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
                        <span>OUR GOAL</span>
                        <h3>Goal and Objectives <span class="overlay"
                                style="transform: matrix(0, 0, 0, 1, 0, 0); transform-origin: left 50% 0px;"></span></h3>
                        <p></p>
                        <h3 style="margin: 0in 0in 15pt; line-height: 150%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;"
                            class="">
                            <p
                                style="text-align: justify; margin: 0in 0in 15pt; line-height: 150%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;">
                                Main
                                objectives include developing long-term client relationships by implementing
                                innovative solutions, and offering our customers quality services anytime and
                                anywhere.<o:p></o:p>
                            </p>
                            <p
                                style="margin: 0in 0in 15pt; line-height: 150%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;">

                            </p>
                            <p
                                style="text-align: justify; margin: 0in 0in 15pt; line-height: 150%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;">
                                NOVA aspires to be one of the leading companies in providing technological solutions and
                                services that fulfill the desires of customers.
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
                            <h3>Our Vision</h3>
                            <p></p>
                            <p
                                style="margin: 0in 0in 15pt; line-height: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: baseline;">
                                Turn the dreams of our clients into a reality.<br></p>
                            <p></p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-about-card aos-init aos-animate" data-aos="fade-down" data-aos-delay="70"
                            data-aos-duration="700" data-aos-once="true">
                            <h3>Our Mission</h3>
                            <p></p>
                            <p class="MsoNormal" style="text-align: justify; line-height: 150%;">
                                NOVA for Integrated Solutions provides quality and innovative solutions for customers around
                                the world. We address complex, evolving challenges in the fields of web development, mobile
                                and desktop applications, artificial intelligence (AI), and the Internet of Things (IoT).
                                NOVA
                                utilizes state-of-the-art technology to deliver cutting-edge solutions.
                                Our in-house research and development capabilities include software engineering, AI
                                solutions,
                                IoT integration, UI/UX design, and professional training programs. The goal is to accelerate
                                the
                                development of societies and enable people and businesses throughout the world.
                                We ensure full recognition of projects from the idea stage to deployment and beyond,
                                treating
                                each project as a unified entity. This is accomplished through sophisticated teamwork,
                                dedication to the highest quality standards, and a commitment to innovation and creativity.
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
                <span>WHY CHOOSE US</span>
                <h2>
                    We Help You To Increase Your Sale Through Solutions<span class="overlay" style="
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
                        Everything we do is aligned with these values<font face="Open Sans, sans-serif"><span
                                style="font-size: 12pt">
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
                            <a href="../html/index.html"><img
                                    src="{{asset('image/Ziar1VrkIiAJE8yrWiyIZTKyDVzte1QK4ufIuZMm.png')}}"
                                    alt=" image" /></a>
                        </div>
                        <div class="choose-content">
                            <h3>
                                <a href="../html/index.html">Excellence</a>
                            </h3>
                            <p></p>
                            <div style="text-align: justify">
                                Excellence in Execution, We believe in performing at the
                                highest level of quality and professionalism in all aspects of
                                the company
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-choose-card aos-init" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500"
                        data-aos-once="true">
                        <div class="choose-image" data-tilt="">
                            <a href="../html/index.html"><img
                                    src="{{asset('image/mv5MUSz3BO1ZdImmoKRZFA7wywV93EZdHyAUfH7A.png')}}"
                                    alt=" image" /></a>
                        </div>
                        <div class="choose-content">
                            <h3>
                                <a href="../html/index.html">Commitment</a>
                            </h3>
                            <p></p>
                            <div style="text-align: justify">
                                Being committed to our work means being committed to our
                                customers. Our commitment shines through in our day-to-day
                                business.
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-choose-card aos-init" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500"
                        data-aos-once="true">
                        <div class="choose-image" data-tilt="">
                            <a href="../html/index.html"><img
                                    src="{{asset('image/k2mPAdhe3yfadl3R35APCMq4PLwkBk615EzGDJqQ.png')}}"
                                    alt=" image" /></a>
                        </div>
                        <div class="choose-content">
                            <h3>
                                <a href="../html/index.html">Teamwork</a>
                            </h3>
                            <p></p>
                            <div style="text-align: justify">
                                We are one company, one team, focusing on our customers’
                                success
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-choose-card aos-init" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500"
                        data-aos-once="true">
                        <div class="choose-image" data-tilt="">
                            <a href="../html/index.html"><img
                                    src="{{asset('image/decTe7YkYPePp0G4TSZyAGovB85Yi9tTuNmKYi7X.png')}}"
                                    alt=" image" /></a>
                        </div>
                        <div class="choose-content">
                            <h3>
                                <a href="../html/index.html">Creativity</a>
                            </h3>
                            <p></p>
                            <div style="text-align: justify">
                                Creativity is a core value, effective Creativity sets higher
                                goals and finds ways to meet them
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-choose-card aos-init" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500"
                        data-aos-once="true">
                        <div class="choose-image" data-tilt="">
                            <a href="../html/index.html"><img
                                    src="{{asset('image/sFL2jkR1CC43rPNzB0QiUhKidGgQdQz4raiik3ft.png')}}"
                                    alt=" image" /></a>
                        </div>
                        <div class="choose-content">
                            <h3>
                                <a href="../html/index.html">Passion</a>
                            </h3>
                            <p></p>
                            <div style="text-align: justify">
                                We exhibit passion in everything we&nbsp; do in order to
                                exceed the highest&nbsp; expectations of our customers.
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-choose-card aos-init" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500"
                        data-aos-once="true">
                        <div class="choose-image" data-tilt="">
                            <a href="../html/index.html"><img
                                    src="{{asset('image/33dJZH0ohwVRfdXVLH1Ro2SstEO4qePp0STU4Ywi.png')}}"
                                    alt=" image" /></a>
                        </div>
                        <div class="choose-content">
                            <h3>
                                <a href="../html/index.html">Integrity</a>
                            </h3>
                            <p></p>
                            <div style="text-align: justify">
                                Being whole and undivided, Integrity&nbsp; is the defining
                                quality of our people&nbsp; and our work.
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-choose-card aos-init" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500"
                        data-aos-once="true">
                        <div class="choose-image" data-tilt="">
                            <a href="../html/index.html"><img
                                    src="{{asset('image/9kHL2vfSqYS15orB5H93AdDZtETO2mGBhNOeKbSL.png')}}"
                                    alt=" image" /></a>
                        </div>
                        <div class="choose-content">
                            <h3>
                                <a href="../html/index.html">Innovation</a>
                            </h3>
                            <p></p>
                            <div style="text-align: justify">
                                We have the mentality of continuous&nbsp; improvement and
                                development of&nbsp; new products and services
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
                            <a href="../html/index.html"><img
                                    src="{{asset('image/An9T3tDQAyAU4LS7gG1nOWzuA4jkHoNWpEzVd9w3.png')}}"
                                    alt=" image" /></a>
                        </div>
                        <div class="choose-content">
                            <h3>
                                <a href="../html/index.html">Quality</a>
                            </h3>
                            <p></p>
                            <div style="text-align: justify">
                                What we do, we do well,We’re committed to providing the best
                                customer service possible.
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
                    <span>SKILLSET</span>
                    <h3>We Have A Set Of Skill With High Quality<span class="overlay"
                            style="transform-origin: left 50% 0px; transform: matrix(0, 0, 0, 1, 0, 0);"></span></h3>
                </div>

                <div class="skill-bar aos-init" data-percentage="97%" data-aos="fade-up" data-aos-delay="50"
                    data-aos-duration="500" data-aos-once="true">
                    <p class="progress-title-holder">
                        <span class="progress-title">Internet of Things</span>
                        <span class="progress-number-wrapper">
                            <span class="progress-number-mark" style="left: 97%;">
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
                        <span class="progress-title">Web Development</span>
                        <span class="progress-number-wrapper">
                            <span class="progress-number-mark" style="left: 95%;">
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
                        <span class="progress-title">Mobile Development</span>
                        <span class="progress-number-wrapper">
                            <span class="progress-number-mark" style="left: 93%;">
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
                        <span class="progress-title">Desktop Development</span>
                        <span class="progress-number-wrapper">
                            <span class="progress-number-mark" style="left: 97%;">
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
                        <span class="progress-title">Artificial Intelligence</span>
                        <span class="progress-number-wrapper">
                            <span class="progress-number-mark" style="left: 95%;">
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
@endsection