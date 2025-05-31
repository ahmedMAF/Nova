@extends('layout.main')

@section('title', 'Our Projects')

@section('content')
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
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-card">
                                <div class="blog-image">
                                    <a class="prevent" href="#"><img src="../image/project1.jpeg" alt="image"></a>

                                    <div class="date">17/10/2022</div>
                                </div>
                                <div class="blog-content">
                                    <h3>
                                        <a class="prevent" href="#">IMN</a>
                                    </h3>
                                    <p>IMN is a social networking app designed to bring Muslims together, offering a
                                        simplified guide to
                                        learning the basics of Islam for new Muslims. The...</p>
                                    <a href="#" class="blog-btn show">View More</a>
                                    <div id="all-text" style="  
                                                    display: none;  
                                                    background-color: #73589b;
                                                    width: 100%;
                                                    position: fixed;
                                                    left: 5%;
                                                    top: 50%;
                                                    z-index: 100;
                                                    padding: 20px;
                                                    width: 90%;
                                                    border-radius: 10px;">
                                        <div class="x" style="
                                                    color: white;
                                                    font-size: 20px;
                                                    font-weight: bold;
                                                    position: absolute;
                                                    right: -23px;
                                                    top: -23px;
                                                    background-color: #73589b;
                                                    width: 30px;
                                                    height: 30px;
                                                    border-radius: 50%;
                                                    text-align: center;
                                                  cursor: pointer;">X</div>
                                        <h3 style="color: white;">IMN</h3>
                                        <p style="color: white;">IMN is a social networking app designed to bring Muslims
                                            together, offering
                                            a simplified guide to learning the basics of Islam for new Muslims. The app
                                            allows users to create
                                            personalized profiles, connect with others, and engage with posts. It also
                                            features a unique
                                            AI-powered Q&A system for religious inquiries. Users can earn points by
                                            answering religious
                                            questions, redeemable for gift cards. IMN also includes private and public
                                            groups, an influencer
                                            club, and a premium subscription for additional benefits. The app is equipped
                                            with notification
                                            alerts to keep users updated on interactions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-card">
                                <div class="blog-image">
                                    <a class="prevent" href="#"><img src="../image/project2.jpeg" alt="image"></a>

                                    <div class="date">22/8/2023</div>
                                </div>
                                <div class="blog-content">
                                    <h3>
                                        <a class="prevent" href="#">Pesticides Robot</a>
                                    </h3>
                                    <p>At NOVA, we develop intelligent solutions for the agricultural sector. One of our
                                        innovative
                                        projects is the Pesticides Robot – an advanced agricultural ...</p>
                                    <a href="#" class="blog-btn show">View More</a>
                                    <div id="all-text" style="  
                                                  display: none;  
                                                  background-color: #73589b;
                                                  width: 100%;
                                                  position: fixed;
                                                  left: 5%;
                                                  top: 50%;
                                                  z-index: 100;
                                                  padding: 20px;
                                                  width: 90%;
                                                  border-radius: 10px;">
                                        <div class="x" style="
                                                  color: white;
                                                  font-size: 20px;
                                                  font-weight: bold;
                                                  position: absolute;
                                                  right: -23px;
                                                  top: -23px;
                                                  background-color: #73589b;
                                                  width: 30px;
                                                  height: 30px;
                                                  border-radius: 50%;
                                                  text-align: center;
                                                cursor: pointer;">X</div>
                                        <h3 style="color: white;">Pesticides Robot – Smart Farming Starts Here! </h3>
                                        <p style="color: white;">At NOVA, we develop intelligent solutions for the
                                            agricultural sector. One
                                            of our innovative projects is the Pesticides Robot – an advanced agricultural
                                            robot that can be
                                            remotely controlled to spray pesticides and take care of fields with high
                                            efficiency and
                                            precision. Using cutting-edge technology, we aim to enhance productivity, reduce
                                            costs, and
                                            maintain a safer and more sustainable farming environment.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-card">
                                <div class="blog-image">
                                    <a class="prevent" href="#"><img src="../image/project7.jpeg" alt="image"></a>

                                    <div class="date">2/1/2025</div>
                                </div>
                                <div class="blog-content">
                                    <h3>
                                        <a class="prevent" href="#">Al-Mustaqbal Platform</a>
                                    </h3>
                                    <p>Al-Mustaqbal Platform" is an innovative educational app that integrates the
                                        Palestinian curriculum
                                        with artificial intelligence. It allows students to...</p>
                                    <a href="#" class="blog-btn show">View More</a>
                                    <div id="all-text" style="  
                                                  display: none;  
                                                  background-color: #73589b;
                                                  width: 100%;
                                                  position: fixed;
                                                  left: 5%;
                                                  top: 50%;
                                                  z-index: 100;
                                                  padding: 20px;
                                                  width: 90%;
                                                  border-radius: 10px;">
                                        <div class="x" style="
                                                  color: white;
                                                  font-size: 20px;
                                                  font-weight: bold;
                                                  position: absolute;
                                                  right: -23px;
                                                  top: -23px;
                                                  background-color: #73589b;
                                                  width: 30px;
                                                  height: 30px;
                                                  border-radius: 50%;
                                                  text-align: center;
                                                cursor: pointer;">X</div>
                                        <h3 style="color: white;">Al-Mustaqbal Platform</h3>
                                        <p style="color: white;">
                                            Al-Mustaqbal Platform" is an innovative educational app that integrates the
                                            Palestinian curriculum
                                            with artificial intelligence. It allows students to ask any question related to
                                            their studies and
                                            receive accurate and instant answers. The platform aims to facilitate learning
                                            by providing a
                                            reliable and fast source of information, helping students better understand
                                            their subjects and
                                            improve their academic performance.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-card">
                                <div class="blog-image">
                                    <a class="prevent" href="#"><img src="../image/project3.jpeg" alt="image"></a>

                                    <div class="date">7/1/2023</div>
                                </div>
                                <div class="blog-content">
                                    <h3>
                                        <a class="prevent" href="#">Solar and Wind Energy System</a>
                                    </h3>
                                    <p>Introducing the Solar and Wind Energy System, one of our outstanding projects at
                                        NOVA. This hybrid
                                        system harnesses two integrated renewable ...</p>
                                    <a href="#" class="blog-btn show">View More</a>
                                    <div id="all-text" style="  
                                                display: none;  
                                                background-color: #73589b;
                                                width: 100%;
                                                position: fixed;
                                                left: 5%;
                                                top: 50%;
                                                z-index: 100;
                                                padding: 20px;
                                                width: 90%;
                                                border-radius: 10px;">
                                        <div class="x" style="
                                                color: white;
                                                font-size: 20px;
                                                font-weight: bold;
                                                position: absolute;
                                                right: -23px;
                                                top: -23px;
                                                background-color: #73589b;
                                                width: 30px;
                                                height: 30px;
                                                border-radius: 50%;
                                                text-align: center;
                                              cursor: pointer;">X</div>
                                        <h3 style="color: white;">One of NOVA's Innovative Projects – The Solar and Wind
                                            Energy System!</h3>
                                        <p style="color: white;">Introducing the Solar and Wind Energy System, one of our
                                            outstanding
                                            projects at NOVA. This hybrid system harnesses two integrated renewable energy
                                            sources – solar and
                                            wind – to generate clean and sustainable electricity. Designed for high
                                            efficiency and continuous
                                            power supply, it is an ideal solution for various applications. At NOVA, we are
                                            committed to
                                            developing smart solutions that contribute to a more sustainable future!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-card">
                                <div class="blog-image">
                                    <a class="prevent" href="#"><img src="../image/project8.jpeg" alt="image"></a>

                                    <div class="date">9/8/2023</div>
                                </div>
                                <div class="blog-content">
                                    <h3>
                                        <a class="prevent" href="#">Al-Amal School Website</a>
                                    </h3>
                                    <p>Al-Amal School Website" is a comprehensive platform for managing students and exams,
                                        allowing the
                                        school to efficiently organize student data...</p>
                                    <a href="#" class="blog-btn show">View More</a>
                                    <div id="all-text" style="  
                                                display: none;  
                                                background-color: #73589b;
                                                width: 100%;
                                                position: fixed;
                                                left: 5%;
                                                top: 50%;
                                                z-index: 100;
                                                padding: 20px;
                                                width: 90%;
                                                border-radius: 10px;">
                                        <div class="x" style="
                                                color: white;
                                                font-size: 20px;
                                                font-weight: bold;
                                                position: absolute;
                                                right: -23px;
                                                top: -23px;
                                                background-color: #73589b;
                                                width: 30px;
                                                height: 30px;
                                                border-radius: 50%;
                                                text-align: center;
                                              cursor: pointer;">X</div>
                                        <h3 style="color: white;">Al-Amal School Website</h3>
                                        <p style="color: white;">
                                            Al-Amal School Website" is a comprehensive platform for managing students and
                                            exams, allowing the
                                            school to efficiently organize student data and conduct online tests seamlessly.
                                            The website
                                            provides each student with a personal account for taking exams and tracking
                                            academic progress.
                                            Additionally, parents have dedicated accounts to monitor their children's
                                            performance and
                                            communicate with teachers, ensuring the best educational experience.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-card">
                                <div class="blog-image">
                                    <a class="prevent" href="#"><img src="../image/project4.jpeg" alt="image"></a>

                                    <div class="date">6/5/2022</div>
                                </div>
                                <div class="blog-content">
                                    <h3>
                                        <a class="prevent" href="#">The Heat Exchange System!</a>
                                    </h3>
                                    <p>Presenting the Heat Exchange System, one of our advanced projects at NOVA. This
                                        system is ...</p>
                                    <a href="#" class="blog-btn show">View More</a>
                                    <div id="all-text" style="  
                                                display: none;  
                                                background-color: #73589b;
                                                width: 100%;
                                                position: fixed;
                                                left: 5%;
                                                top: 50%;
                                                z-index: 100;
                                                padding: 20px;
                                                width: 90%;
                                                border-radius: 10px;">
                                        <div class="x" style="
                                                color: white;
                                                font-size: 20px;
                                                font-weight: bold;
                                                position: absolute;
                                                right: -23px;
                                                top: -23px;
                                                background-color: #73589b;
                                                width: 30px;
                                                height: 30px;
                                                border-radius: 50%;
                                                text-align: center;
                                              cursor: pointer;">X</div>
                                        <h3 style="color: white;">One of NOVA's Innovative Projects – The Heat Exchange
                                            System! </h3>
                                        <p style="color: white;">Presenting the Heat Exchange System, one of our advanced
                                            projects at NOVA.
                                            This system is designed to regulate temperature efficiently and control the heat
                                            of liquids,
                                            ensuring optimal thermal management for various applications. Whether for
                                            industrial or scientific
                                            use, our solution enhances energy efficiency and performance. At NOVA, we
                                            innovate to create
                                            smarter and more sustainable technologies!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-card">
                                <div class="blog-image">
                                    <a class="prevent" href="#"><img src="../image/project5.jpeg" alt="image"></a>

                                    <div class="date">10/9/2022</div>
                                </div>
                                <div class="blog-content">
                                    <h3>
                                        <a class="prevent" href="#">Oxygen Delivery Device</a>
                                    </h3>
                                    <p>We present the Oxygen Delivery Device, one of NOVA's advanced solutions in the
                                        medical field. This
                                        ...</p>
                                    <a href="#" class="blog-btn show">View More</a>
                                    <div id="all-text" style="  
                                                display: none;  
                                                background-color: #73589b;
                                                width: 100%;
                                                position: fixed;
                                                left: 5%;
                                                top: 50%;
                                                z-index: 100;
                                                padding: 20px;
                                                width: 90%;
                                                border-radius: 10px;">
                                        <div class="x" style="
                                                color: white;
                                                font-size: 20px;
                                                font-weight: bold;
                                                position: absolute;
                                                right: -23px;
                                                top: -23px;
                                                background-color: #73589b;
                                                width: 30px;
                                                height: 30px;
                                                border-radius: 50%;
                                                text-align: center;
                                              cursor: pointer;">X</div>
                                        <h3 style="color: white;">Oxygen Delivery Device – One of NOVA's Innovative
                                            Projects!</h3>
                                        <p style="color: white;">We present the Oxygen Delivery Device, one of NOVA's
                                            advanced solutions in
                                            the medical field. This device is designed to ensure a continuous and efficient
                                            oxygen supply,
                                            helping to improve healthcare quality and enhance patient comfort. At NOVA, we
                                            are committed to
                                            innovating technologies that make life better!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-card">
                                <div class="blog-image">
                                    <a class="prevent" href="#"><img src="../image/project9.jpeg" alt="image"></a>

                                    <div class="date">3/1/2025</div>
                                </div>
                                <div class="blog-content">
                                    <h3>
                                        <a class="prevent" href="#">Palestine Embroidery Global Website</a>
                                    </h3>
                                    <p>Palestine Embroidery Global Website" is an online platform specializing in managing
                                        and selling
                                        Palestinian embroidery. It allows users to browse...</p>
                                    <a href="#" class="blog-btn show">View More</a>
                                    <div id="all-text" style="  
                                                display: none;  
                                                background-color: #73589b;
                                                width: 100%;
                                                position: fixed;
                                                left: 5%;
                                                top: 50%;
                                                z-index: 100;
                                                padding: 20px;
                                                width: 90%;
                                                border-radius: 10px;">
                                        <div class="x" style="
                                                color: white;
                                                font-size: 20px;
                                                font-weight: bold;
                                                position: absolute;
                                                right: -23px;
                                                top: -23px;
                                                background-color: #73589b;
                                                width: 30px;
                                                height: 30px;
                                                border-radius: 50%;
                                                text-align: center;
                                              cursor: pointer;">X</div>
                                        <h3 style="color: white;">Palestine Embroidery Global Website</h3>
                                        <p style="color: white;">
                                            Palestine Embroidery Global Website" is an online platform specializing in
                                            managing and selling
                                            Palestinian embroidery. It allows users to browse products, place orders, and
                                            track shipping
                                            status until delivery. The website features a comprehensive system for inventory
                                            management, order
                                            processing, and user notifications, ensuring a seamless shopping experience and
                                            high efficiency in
                                            sales and delivery operations.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-card">
                                <div class="blog-image">
                                    <a class="prevent" href="#"><img src="../image/project6.jpeg" alt="image"></a>

                                    <div class="date">30/4/2024</div>
                                </div>
                                <div class="blog-content">
                                    <h3>
                                        <a class="prevent" href="#">Solar Cleaner System</a>
                                    </h3>
                                    <p>NOVA is proud to present the Solar Panel Cleaning System as part of our innovative
                                        projects. This
                                        system aims to enhance the efficiency of solar ...</p>
                                    <a href="#" class="blog-btn show">View More</a>
                                    <div id="all-text" style="  
                                                display: none;  
                                                background-color: #73589b;
                                                width: 100%;
                                                position: fixed;
                                                left: 5%;
                                                top: 50%;
                                                z-index: 100;
                                                padding: 20px;
                                                width: 90%;
                                                border-radius: 10px;">
                                        <div class="x" style="
                                                color: white;
                                                font-size: 20px;
                                                font-weight: bold;
                                                position: absolute;
                                                right: -23px;
                                                top: -23px;
                                                background-color: #73589b;
                                                width: 30px;
                                                height: 30px;
                                                border-radius: 50%;
                                                text-align: center;
                                              cursor: pointer;">X</div>
                                        <h3 style="color: white;">Solar Cleaner System</h3>
                                        <p style="color: white;">NOVA is proud to present the Solar Panel Cleaning System as
                                            part of our
                                            innovative projects. This system aims to enhance the efficiency of solar panels
                                            through advanced
                                            technologies that ensure effective cleaning without harming the environment. At
                                            NOVA, we are
                                            always committed to providing smart and sustainable solutions that meet the
                                            future needs of the
                                            renewable energy sector
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <nav>
                            <ul class="pagination-area">

                                <li class="prev page-numbers disabled" aria-disabled="true" aria-label="« Previous">
                                    <span class="page-link" aria-hidden="true"><i class="ri-arrow-left-s-line"></i></span>
                                </li>





                                <li class="page-numbers active" aria-current="page"><span class="page-link">1</span></li>
                                <li class="page-numbers"><a class="page-link" href="../html/projects.html">2</a></li>
                                <li class="page-numbers"><a class="page-link" href="../html/projects.html">3</a></li>
                                <li class="page-numbers"><a class="page-link" href="../html/projects.html">4</a></li>
                                <li class="page-numbers"><a class="page-link" href="../html/projects.html">5</a></li>


                                <li class="next page-numbers">
                                    <a class="page-link" href="../html/projects.html" rel="next" aria-label="Next »"><i
                                            class="ri-arrow-right-s-line"></i></a>

                                </li>
                            </ul>
                        </nav>



                    </div>
                </div>
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