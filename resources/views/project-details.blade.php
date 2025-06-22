@extends('layout.main')

@section('title', 'Project details')

@section('content')
    <!-- Start Page Banner Area -->
    <div class="page-banner-area jarallax"
        style="background-color: black; position: relative; z-index: 0; background-attachment: scroll; background-size: auto;"
        data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="page-banner-content aos-init aos-animate" data-aos="fade-right" data-aos-delay="50"
                data-aos-duration="500" data-aos-once="true">
                <h2 style="color: white">Project details</h2>

                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Projects</a>
                    </li>
                    <li>{{$project->name}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Project Details Area -->
    <div class="project-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-details-desc">
                        <!-- Main Project Image -->
                        <div class="project-details-image mb-5 text-center">
                            <img src="{{asset('storage/' . $project->image)}}" alt="Main Project Image" class="rounded-3">
                        </div>

                        <!-- Project Meta -->
                        <div class="project-details-meta mb-5">
                            <ul class="list-unstyled d-flex flex-wrap align-items-center justify-content-between">
                                <li>
                                    <span>Date:</span>
                                    {{$project->date}}
                                </li>
                                <li>
                                    <span>Category:</span>
                                    {{$project->category->name}}
                                </li>
                                <li>
                                    <span>Client:</span>
                                    {{$project->client}}
                                </li>
                            </ul>
                        </div>

                        <!-- Project Title & Description -->
                        <div class="project-details-content mb-5">
                            <h3 class="mb-3">{{$project->name}}</h3>
                            <p>{{$project->description}}</p>
                        </div>

                        <!-- Project Gallery -->
                        <div class="project-gallery mb-5">
                            <h4 class="mb-4">Project Gallery</h4>
                            <div class="row">
                                @foreach (json_decode($project->photos) as $photo)
                                    <div class="col-md-4 col-sm-6 col-12 mb-4">
                                        <div class="gallery-item text-center">
                                            <a href="{{asset('storage/' . $photo)}}" class="fancybox text-decoration-none"
                                                data-fancybox="gallery">
                                                <img src="{{asset('storage/' . $photo)}}" alt="Project Image"
                                                    class="img-fluid rounded-3">
                                                <div class="gallery-overlay">
                                                    <i style="color: var(--main-color)" class="fs-3 ri-zoom-in-line"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Project Videos -->
                        <div class="project-videos mb-5">
                            <h4 class="mb-4">Project Videos</h4>
                            <div>
                                <div>
                                    <div class="video-container rounded-3 text-center">
                                        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Project Links -->
                        <div class="project-links">
                            <h4 class="mb-4">Related Links</h4>
                            <div>
                                <div>
                                    <div class="mx-auto link-item p-3 rounded-3 text-center"
                                        style="background-color: #f8f9fa; width: fit-content;">
                                        <a href="{{$project->link}}" target="_blank" class="d-flex align-items-center">
                                            <i class="ri-external-link-line me-2"></i>
                                            <span>Live Demo</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Project Details Area -->
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            // Initialize fancybox for gallery images
            $('[data-fancybox="gallery"]').fancybox({
                buttons: [
                    "zoom",
                    "share",
                    "slideShow",
                    "fullScreen",
                    "download",
                    "thumbs",
                    "close"
                ],
                loop: true,
                protect: true
            });

            // Make video containers responsive
            $('.video-container').each(function () {
                $(this).css('padding-bottom', (9 / 16 * 100) + '%');
            });
        });
    </script>
@endsection