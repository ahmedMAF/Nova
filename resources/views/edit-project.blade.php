@extends('layout.main')

@section('title', 'Edit Project')

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
                <h2 style="color: white">{{__('add-project.editProject')}}</h2>

                <ul>
                    <li>
                        <a href="{{route('home')}}">{{__('add-project.home')}}</a>
                    </li>
                    <li>
                        <a href="{{route('admin')}}">{{__('add-project.admin')}}</a>
                    </li>
                    <li>{{__('add-project.editProject')}}</li>
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
                        <form action="{{route('update_project', $project->id)}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div id="contactFormTwo" novalidate="true">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" required=""
                                                data-error="{{__('add-project.nameErorr')}}" placeholder="{{__('add-project.nameEn')}}"
                                                value="{{ $project->name_en}}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name_ar" class="form-control" required=""
                                                data-error="{{__('add-project.nameErorr')}}" placeholder="{{__('add-project.nameAr')}}"
                                                value="{{ $project->name_ar }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="client" class="form-control" required=""
                                                data-error="{{__('add-project.clientErorr')}}" placeholder="{{__('add-project.clientEn')}}"
                                                value="{{ $project->client_en }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="client_ar" class="form-control" required=""
                                                data-error="{{__('add-project.clientErorr')}}" placeholder="{{__('add-project.clientAr')}}"
                                                value="{{ $project->client_ar }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="description" class="form-control" cols="30" rows="6" required=""
                                                data-error="{{__('add-project.descriptionErorr')}}"
                                                placeholder="{{__('add-project.descriptionEn')}}">{{$project->description_en}}</textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="description_ar" class="form-control" cols="30" rows="6"
                                                required="" data-error="{{__('add-project.descriptionErorr')}}"
                                                placeholder="{{__('add-project.descriptionAr')}}">{{$project->description_ar}}</textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <select name="category" id="" required class="form-control select">
                                                <option disabled selected>{{__('add-project.select')}}</option>
                                                @foreach ($categories as $category)
                                                    <option {{$category->id == $project->category_id ? "selected" : ""}}
                                                        value="{{ $category->id }}">{{ $category->name_en . " | " . $category->name_ar}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <label class="pb-2 ps-2">{{__('add-project.projectDate')}}</label>
                                        <div class="form-group">
                                            <input type="date" name="date" class="form-control" required=""
                                                data-error="{{__('add-project.projectDateErorr')}}" placeholder="{{__('add-project.projectDate')}}"
                                                value="{{ $project->date }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <label class="pb-2 ps-2">{{__('add-project.projectPhoto')}}</label>
                                        <div class="form-group">
                                            <input type="file" name="image" class="form-control"
                                                data-error="{{__('add-project.projectPhotoErorr')}}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="link" class="form-control"
                                                placeholder="{{__('add-project.link')}}" value="{{ $project->link }}">
                                        </div>
                                    </div>

                                    <div id="photo" class="col-lg-12 col-md-12">
                                        <span style="cursor: pointer; font-size: 20px;">{{__('add-project.photos')}}</span>
                                        <span class="icon">+</span>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <div id="con-photo"></div>
                                        </div>
                                    </div>

                                    <div id="video" class="col-lg-12 col-md-12">
                                        <span style="cursor: pointer; font-size: 20px;">{{__('add-project.videos')}}</span>
                                        <span class="icon">+</span>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <div id="con-video"></div>
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
                                            style="pointer-events: all; cursor: pointer;">{{__('add-project.save')}}<span></span></button>


                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Project Gallery -->
                    @if (json_decode($project->photos))
                        <div class="project-gallery mb-5">
                            <h4 class="mb-4">{{__('add-project.projectGallery')}}</h4>
                            <div class="row">
                                @foreach (json_decode($project->photos) as $photo)
                                    <div class="col-md-4 col-sm-6 col-12 mb-4">
                                        <div class="gallery-item text-center">
                                            <div style="height: 250px" class="projetc-detalis-image">
                                                <a href="{{asset('storage/' . $photo)}}" class="fancybox text-decoration-none"
                                                data-fancybox="gallery">
                                                <img src="{{asset('storage/' . $photo)}}" alt="Project Image"
                                                    class="img-fluid rounded-3">
                                            </div>
                                                <div class="gallery-overlay mt-3">
                                                    <i style="color: var(--main-color)" class="fs-3 ri-zoom-in-line"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <form action="{{route('delete_media', [$project->id, urlencode($photo), 'p'])}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="{{__('add-project.delete')}}" class="btn-custm btn-custm-delete mt-3 mx-auto d-block">
                                        </form>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Project Videos -->
                    @if (json_decode($project->videos))
                        <div class="project-videos mb-5">
                            <h4 class="mb-4">{{__('add-project.projectVideos')}}</h4>
                            <div>
                                <div>
                                    @foreach (json_decode($project->videos) as $video)
                                        <div class="video-container rounded-3 text-center">
                                            <iframe src="https://www.youtube.com/embed/{{$video}}" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                            <form action="{{route('delete_media', [$project->id, $video, 'v'])}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="{{__('add-project.delete')}}" class="btn-custm btn-custm-delete mt-2">
                                            </form>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
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
            input.name = 'photo[]';
            input.className = 'form-control mb-2';
            conPhoto.appendChild(input);
            p++;
        }

        video.onclick = function () {
            let input = document.createElement('input');
            input.type = 'text';
            input.name = 'video[]';
            input.placeholder = '{{__("add-project.videoUrl")}}';
            input.className = 'form-control mb-2';
            conVideo.appendChild(input);
            v++;
        }
    </script>
@endsection