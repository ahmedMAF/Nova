@extends('layout.main')

@section('title', 'Edit Service')

@section('content')
    <!-- Start Page Banner Area -->
    <div class="page-banner-area jarallax"
        style="background-color: black; position: relative; z-index: 0; background-attachment: scroll; background-size: auto;"
        data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="page-banner-content aos-init aos-animate" data-aos="fade-right" data-aos-delay="50"
                data-aos-duration="500" data-aos-once="true">
                <h2 style="color: white">Edit Service</h2>

                <ul>
                    <li>
                        <a href="../html/index.html">Home</a>
                    </li>
                    <li>
                        <a href="../html/index.html">Admin</a>
                    </li>
                    <li>Edit Service</li>
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
                        <form action="{{route('update_service', $service->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div id="contactFormTwo" novalidate="true">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" required=""
                                                data-error="Please enter service name" placeholder="Name (English)"
                                                value="{{ $service->name }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name_ar" class="form-control" required=""
                                                data-error="Please enter service name" placeholder="Name (Arabic)"
                                                value="{{ $service->name_ar }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="description" class="form-control" cols="30" rows="6" required=""
                                                data-error="Please enter service description"
                                                placeholder="Description (English)">{{ $service->description }}</textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="description_ar" class="form-control" cols="30" rows="6"
                                                required="" data-error="Please enter service description"
                                                placeholder="Description (Arabic)">{{ $service->description_ar }}</textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="delivery_time" class="form-control" required=""
                                                data-error="Please enter Delivery Time Rage"
                                                placeholder="Delivery Time Rage" value="{{ $service->delivery_time }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="price_range" class="form-control" required=""
                                                data-error="Please enter Price Range" placeholder="Price Range"
                                                value="{{ $service->price_range }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label class="pb-2 ps-2">Information</label>
                                            <input type="file" name="information" class="form-control"
                                                data-error="Please uplode Information">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label class="pb-2 ps-2">Image</label>
                                            <input type="file" name="image" class="form-control"
                                                data-error="Please uplode Image">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <label class="pb-2 ps-4">features</label>
                                    @foreach (json_decode($service->feature) as $feature)
                                        <div class="form-group">
                                            <input type="text" name="feature[]" class="form-control"
                                             placeholder="feature" value="{{ $feature }}">
                                        </div>
                                    @endforeach
                                    <div id="feature" class="col-lg-12 col-md-12">
                                        <span style="cursor: pointer; font-size: 20px;">Add a feature</span>
                                        <span class="icon">+</span>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <div id="con-feature"></div>
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
                                            style="pointer-events: all; cursor: pointer;">Save<span></span></button>


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
        let feature = document.getElementById('feature');
        let confeature = document.getElementById('con-feature');
        let f = 0;

        feature.onclick = function () {
            let input = document.createElement('input');
            input.type = 'text';
            input.name = 'feature[]';
            input.className = 'form-control mb-2';
            input.placeholder = 'Feature';
            confeature.appendChild(input);
            f++;
        }
    </script>
@endsection