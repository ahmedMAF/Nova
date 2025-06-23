@extends('layout.main')

@section('title', 'Admin Dashboard')

@section('content')
    @if (session('success'))
        <div class="container alert alert-success alert-dismissible fade show position-fixed start-50 translate-middle-x mt-3 shadow"
            role="alert" style="z-index: 1055; width:100%; top: 70px;">
            {{ session('success') }}
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
                <h2 style="color: white">Dashboard</h2>

                <ul>
                    <li>
                        <a href="../html/index.html">Home</a>
                    </li>
                    <li>Dashboard</li>
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
    <!-- Admin Section -->
    <section id="portfolio" class="portfolio section mt-5 pt-5">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Admin</h2>
            <p>Easily manage every detail of the Smart Life website with complete control</p>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row justify-content-center gy-5">
                <div style="max-width: 220px;">
                    <a href="{{route('admin_project')}}" class="default-btn">Add Project</a>
                </div>
                <div style="max-width: 220px;">
                    <a href="{{route('admin_team')}}" class="default-btn">Add Member</a>
                </div>
                <div style="max-width: 220px;">
                    <a href="{{route('admin_service')}}" class="default-btn">Add Service</a>
                </div>
                <div style="max-width: 220px;">
                    <a href="{{route('admin_category')}}" class="default-btn">Add Category</a>
                </div>
                <div style="max-width: 220px;">
                    <a href="{{route('change')}}" class="default-btn">password</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Admin Section -->
@endsection