@extends('layout.main')

@section('title', 'Change Password')

@section('content')
    @if (session('error'))
        <div class="container alert alert-danger alert-dismissible fade show position-fixed start-50 translate-middle-x mt-3 shadow"
            role="alert" style="z-index: 1055; width:100%; top: 70px;">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- Start Page Banner Area -->
    <div class="page-banner-area jarallax"
        style="background-color: black; position: relative; z-index: 0; background-attachment: scroll; background-size: auto;"
        data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="page-banner-content aos-init aos-animate" data-aos="fade-right" data-aos-delay="50"
                data-aos-duration="500" data-aos-once="true">
                <h2 style="color: white">Change Password</h2>

                <ul>
                    <li>
                        <a href="../html/index.html">Home</a>
                    </li>
                    <li>
                        <a href="../html/index.html">Admin</a>
                    </li>
                    <li>Change Password</li>
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
                        <form action="{{ route('change_password') }}" method="post">
                            @csrf
                            <div id="contactFormTwo" novalidate="true">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="password" name="old_password" class="form-control" required=""
                                                data-error="Please enter your old password" placeholder="Old Password">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="password" name="new_password" class="form-control" required=""
                                                data-error="Please enter your New Password" placeholder="New Password">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="password" name="new_password_confirmation" class="form-control"
                                                required="" data-error="Please enter your New Password"
                                                placeholder="Confirm New Password">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul class="list-unstyled">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="col-lg-12 col-md-12 text-center">
                                        <button type="submit" class="default-btn disabled"
                                            style="pointer-events: all; cursor: pointer;">Change<span></span></button>


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