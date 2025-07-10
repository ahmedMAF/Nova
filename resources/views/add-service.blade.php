@extends('layout.main')

@section('title', 'Add Service')

@section('content')
    <!-- Start Page Banner Area -->
    <div class="page-banner-area jarallax"
        style="background-color: black; position: relative; z-index: 0; background-attachment: scroll; background-size: auto;"
        data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="page-banner-content aos-init aos-animate" data-aos="fade-right" data-aos-delay="50"
                data-aos-duration="500" data-aos-once="true">
                <h2 style="color: white">{{__('add-service.addService')}}</h2>

                <ul>
                    <li>
                        <a href="../html/index.html">{{__('add-service.home')}}</a>
                    </li>
                    <li>
                        <a href="../html/index.html">{{__('add-service.admin')}}</a>
                    </li>
                    <li>{{__('add-service.addService')}}</li>
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
                        <form action="{{route('add-service')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div id="contactFormTwo" novalidate="true">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" required=""
                                                data-error="{{__('add-service.nameErorr')}}"
                                                placeholder="{{__('add-service.nameEn')}}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name_ar" class="form-control" required=""
                                                data-error="{{__('add-service.nameErorr')}}"
                                                placeholder="{{__('add-service.nameAr')}}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="description" class="form-control" cols="30" rows="6" required=""
                                                data-error="{{__('add-service.descriptionErorr')}}"
                                                placeholder="{{__('add-service.descriptionEn')}}"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="description_ar" class="form-control" cols="30" rows="6"
                                                required="" data-error="{{__('add-service.descriptionErorr')}}"
                                                placeholder="{{__('add-service.descriptionAr')}}"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="delivery_time" class="form-control" required=""
                                                data-error="{{__('add-service.deliveryTimeErorr')}}"
                                                placeholder="{{__('add-service.deliveryTimeEn')}}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="delivery_time_ar" class="form-control" required=""
                                                data-error="{{__('add-service.deliveryTimeErorr')}}"
                                                placeholder="{{__('add-service.deliveryTimeAr')}}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="price_range" class="form-control" required=""
                                                data-error="{{__('add-service.priceErorr')}}"
                                                placeholder="{{__('add-service.price')}}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label class="pb-2 ps-2">{{__('add-service.info')}}</label>
                                            <input type="file" name="information" class="form-control"
                                                data-error="Please uplode Information">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label class="pb-2 ps-2">{{__('add-service.image')}}</label>
                                            <input type="file" name="image" class="form-control" required=""
                                                data-error="{{__('add-service.imageErorr')}}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div id="feature" class="col-lg-12 col-md-12">
                                        <span
                                            style="cursor: pointer; font-size: 20px;">{{__('add-service.addFeature')}}</span>
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
                                            style="pointer-events: all; cursor: pointer;">{{__('add-service.add')}}<span></span></button>


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
            let inputEn = document.createElement('input');
            inputEn.type = 'text';
            inputEn.name = 'feature[]';
            inputEn.className = 'form-control mb-2';
            inputEn.placeholder = '{{__("add-service.featureEn")}}';
            let inputAr = document.createElement('input');
            inputAr.type = 'text';
            inputAr.name = 'feature_ar[]';
            inputAr.className = 'form-control mb-4';
            inputAr.placeholder = '{{__("add-service.featureAr")}}';
            confeature.appendChild(inputEn);
            confeature.appendChild(inputAr);
            f++;
        }
    </script>
@endsection