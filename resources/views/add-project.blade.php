@extends('layout.main')

@section('title', 'Add Project')

@section('content')
    <!-- Start Page Banner Area -->
    <div class="page-banner-area jarallax"
        style="background-color: black; position: relative; z-index: 0; background-attachment: scroll; background-size: auto;"
        data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="page-banner-content aos-init aos-animate" data-aos="fade-right" data-aos-delay="50"
                data-aos-duration="500" data-aos-once="true">
                <h2 style="color: white">Add Project</h2>

                <ul>
                    <li>
                        <a href="../html/index.html">Home</a>
                    </li>
                    <li>
                        <a href="../html/index.html">Admin</a>
                    </li>
                    <li>Add Project</li>
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

    <div class="talk-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12 m-auto">
                    <div class="talk-content margin-zero">
                        <form action="https://formspree.io/f/xyzezaoe" method="post">
                            <input type="hidden" value="KE1FBRWJqSJ5Rl0GflJd3GPetPqRdPKG8TCg25Jl">
                            <div id="contactFormTwo" novalidate="true">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" required=""
                                                data-error="Please enter project name" placeholder="Name (English)">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" required=""
                                                data-error="Please enter project name" placeholder="Name (Arabic)">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" required=""
                                                data-error="Please enter client name" placeholder="Client Name (English)">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" required=""
                                                data-error="Please enter client name" placeholder="Client Name (Arabic)">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" cols="30" rows="6" required=""
                                                data-error="Please enter project description"
                                                placeholder="Description (English)"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" cols="30" rows="6" required=""
                                                data-error="Please enter project description"
                                                placeholder="Description (Arabic)"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <select name="" id="" required class="form-control select">
                                                <option disabled selected>Please select Catogary</option>
                                                <option value="2">cat1</option>
                                                <option value="3"> cat2</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <label class="pb-2 ps-2">Project Date</label>
                                        <div class="form-group">
                                            <input type="date" name="passowrd" class="form-control" required=""
                                                data-error="Please enter project date" placeholder="Project Date">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <label class="pb-2 ps-2">Project Photo</label>
                                        <div class="form-group">
                                            <input type="file" name="passowrd" class="form-control" required=""
                                                data-error="Please enter project photo">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="passowrd" class="form-control"
                                                placeholder="link to project">
                                        </div>
                                    </div>

                                    <div id="photo" class="col-lg-12 col-md-12">
                                        <span style="cursor: pointer; font-size: 20px;">Add a photo</span>
                                        <span class="icon">+</span>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <div id="con-photo"></div>
                                        </div>
                                    </div>

                                    <div id="video" class="col-lg-12 col-md-12">
                                        <span style="cursor: pointer; font-size: 20px;">Add a video</span>
                                        <span class="icon">+</span>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <div id="con-video"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 text-center">
                                        <button type="submit" class="default-btn disabled"
                                            style="pointer-events: all; cursor: pointer;">Add<span></span></button>


                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        let photo = document.getElementById('photo');
        let video = document.getElementById('video');
        let conPhoto = document.getElementById('con-photo');
        let conVideo = document.getElementById('con-video');
        let p = 0, v = 0;

        photo.onclick = function () {
            let input = document.createElement('input');
            input.type = 'file';
            input.name = 'photo' + p;
            input.className = 'form-control mb-2';
            conPhoto.appendChild(input);
            p++;
        }

        video.onclick = function () {
            let input = document.createElement('input');
            input.type = 'text';
            input.name = 'video' + v;
            input.placeholder = 'Video URL';
            input.className = 'form-control mb-2';
            conVideo.appendChild(input);
            v++;
        }
    </script>
@endsection