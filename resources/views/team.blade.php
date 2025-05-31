@extends('layout.main')

@section('title', 'Team')

@section('content')
    <!-- Start Page Banner Area -->
    <div class="page-banner-area bg-5 jarallax"
        style="background-color: black; position: relative; z-index: 0; background-attachment: scroll; background-size: auto;"
        data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="page-banner-content aos-init aos-animate" data-aos="fade-right" data-aos-delay="50"
                data-aos-duration="500" data-aos-once="true">
                <h2 style="color: white">Team</h2>

                <ul>
                    <li>
                        <a href="../html/index.html">Home</a>
                    </li>
                    <li>Team</li>
                </ul>
            </div>
        </div>
        <div id="jarallax-container-0"
            style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -100;">
            <div
                style="background-position: 50% 50%; background-size: 100%; background-repeat: no-repeat; position: fixed; top: 0px; left: 0px; width: 1484.66px; height: 541.5px; overflow: hidden; pointer-events: none; margin-left: -110.664px; margin-top: 30.75px; visibility: visible; transform: translateY(-30.75px) translateZ(0px);">
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Team Area -->
    <div class="team-area pt-100 pb-75">
        <div class="container">
            <div class="section-title section-style-two">
                <span>TEAM MEMBER</span>
                <h2>Our Team<span class="overlay"
                        style="transform-origin: left 50% 0px; transform: matrix(0, 0, 0, 1, 0, 0);"></span></h2>
                <p></p>
                <div style="text-align: justify; ">
                    <p class="MsoNormal">NOVA believes that human resources are the pillars of any strong company. This is
                        the
                        primary
                        reason that we employ only the best minds.</p>
                    <p class="MsoNormal">The NOVA team is enthusiastic, cooperative and perceptive. The team members are
                        dedicated
                        people and reliable partners for providing IT services and solutions.
                    </p>
                    <p class="MsoNormal">We have a team of professionals, where all the members work collaboratively and
                        passionately
                        to achieve significant results and together overcome business challenges.</p>
                    <p class="MsoNormal">
                        <o:p></o:p>
                    </p>
                    <p class="MsoNormal">
                        <o:p></o:p>
                    </p>
                </div>
                <p></p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-card">
                        <div class="team-image" data-tilt="">
                            <img src="../image/team1.jpeg" alt="image">

                        </div>
                        <div class="team-content">
                            <h3>Ahmed Afana</h3>
                            <span>CEO & Web Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-card">
                        <div class="team-image" data-tilt="">
                            <img src="../image/team3.jpeg" alt="image">

                        </div>
                        <div class="team-content">
                            <h3>Abdelkarim Al-Daqamseh</h3>
                            <span>R&D Engineer IoT</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-card">
                        <div class="team-image" data-tilt="">
                            <img src="../image/team2.jpeg" alt="image">

                        </div>
                        <div class="team-content">
                            <h3>Nasser Khatib</h3>
                            <span>Software Engineer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-card">
                        <div class="team-image" data-tilt="">
                            <img src="../image/team4.jpeg" alt="image">

                        </div>
                        <div class="team-content">
                            <h3>Ahmed Shaat</h3>
                            <span>Software Engineer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-card">
                        <div class="team-image" data-tilt="">
                            <img src="../image/team5.jpeg" alt="image">

                        </div>
                        <div class="team-content">
                            <h3>Adham Abu Rabie</h3>
                            <span>Software Engineer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

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