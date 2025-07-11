@extends('layout.main')

@section('title', 'Service Details')

@section('content')
    <!-- Start Page Banner Area -->
    <div class="page-banner-area jarallax"
        style="background-color: black; position: relative; z-index: 0; background-attachment: scroll; background-size: auto;"
        data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="page-banner-content aos-init aos-animate" data-aos="fade-right" data-aos-delay="50"
                data-aos-duration="500" data-aos-once="true">
                <h2 style="color: white">{{__('service-details.serviceDetails')}}</h2>

                <ul>
                    <li>
                        <a href="{{route('home')}}">{{__('service-details.home')}}</a>
                    </li>
                    <li>
                        <a href="{{route('services')}}">{{__('service-details.services')}}</a>
                    </li>
                    <li>{{$service->name}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Service Details Area -->
    <div class="service-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="service-details-desc">
                        <!-- Main Service Image -->
                        <div class="service-details-image mb-5">
                            <img src="{{asset('storage/' . $service->image)}}" alt="Service Image" class="rounded-3">
                        </div>

                        <!-- Service Title & Description -->
                        <div class="service-details-content mb-5">
                            <h3>{{$service->name}}</h3>
                            <p class="px-2">{{$service->description}}</p>
                        </div>

                        <!-- Service Features -->
                        <div class="service-features mb-5">
                            <h4>{{__('service-details.keyFeatures')}}</h4>
                            <ul class="list-unstyled px-2">
                                @foreach (json_decode($service->feature) as $feature)
                                    <li>
                                        <i class="ri-checkbox-circle-fill" style="color: #4e6baf; font-size: 24px;"></i>
                                        {{$feature}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Service Process -->
                        <div class="service-process mb-5">
                            <h4>{{__('service-details.ourDevelopment')}}</h4>
                            <div class="process-steps px-2">
                                <div class="process-step mb-4">
                                    <h5>{{__('service-details.ourDevelopmentPart1')}}</h5>
                                    <p>{{__('service-details.ourDevelopmentPart11')}}</p>
                                </div>
                                <div class="process-step mb-4">
                                    <h5>{{__('service-details.ourDevelopmentPart2')}}</h5>
                                    <p>{{__('service-details.ourDevelopmentPart22')}}</p>
                                </div>
                                <div class="process-step mb-4">
                                    <h5>{{__('service-details.ourDevelopmentPart3')}}</h5>
                                    <p>{{__('service-details.ourDevelopmentPart33')}}</p>
                                </div>
                                <div class="process-step mb-4">
                                    <h5>{{__('service-details.ourDevelopmentPart4')}}</h5>
                                    <p>{{__('service-details.ourDevelopmentPart44')}}</p>
                                </div>
                                <div class="process-step mb-4">
                                    <h5>{{__('service-details.ourDevelopmentPart5')}}</h5>
                                    <p>{{__('service-details.ourDevelopmentPart55')}}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Service Benefits -->
                        <div class="service-benefits mb-30">
                            <h4>{{__('service-details.choose')}}</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="benefit-item mb-4">
                                        <div class="d-flex align-items-start">
                                            <i class="ri-checkbox-circle-fill me-3"
                                                style="color: #4e6baf; font-size: 24px;"></i>
                                            <div>
                                                <h5>{{__('service-details.choose1')}}</h5>
                                                <p class="mb-0">{{__('service-details.choose11')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item mb-4">
                                        <div class="d-flex align-items-start">
                                            <i class="ri-checkbox-circle-fill me-3"
                                                style="color: #4e6baf; font-size: 24px;"></i>
                                            <div>
                                                <h5>{{__('service-details.choose3')}}</h5>
                                                <p class="mb-0">{{__('service-details.choose33')}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item mb-4">
                                        <div class="d-flex align-items-start">
                                            <i class="ri-checkbox-circle-fill me-3"
                                                style="color: #4e6baf; font-size: 24px;"></i>
                                            <div>
                                                <h5>{{__('service-details.choose2')}}</h5>
                                                <p class="mb-0">{{__('service-details.choose22')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item mb-4">
                                        <div class="d-flex align-items-start">
                                            <i class="ri-checkbox-circle-fill me-3"
                                                style="color: #4e6baf; font-size: 24px;"></i>
                                            <div>
                                                <h5>{{__('service-details.choose4')}}</h5>
                                                <p class="mb-0">{{__('service-details.choose44')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="service-sidebar">
                        <!-- Service Overview -->
                        <div class="sidebar-widget mb-5">
                            <h3 class="widget-title">{{__('service-details.overview')}}</h3>
                            <ul class="overview-list">
                                <li>
                                    <span>{{__('service-details.sname')}}:</span>
                                    {{$service->name}}
                                </li>
                                <li>
                                    <span>{{__('service-details.dTime')}}:</span>
                                    {{$service->delivery_time}}
                                </li>
                                <li>
                                    <span>{{__('service-details.pRange')}}:</span>
                                    {{$service->price_range}}
                                </li>
                                <li>
                                    <span>{{__('service-details.textSupport')}}:</span>
                                    {{__('service-details.support')}}
                                </li>
                            </ul>
                        </div>

                        <!-- Download Brochure -->
                        @if ($service->information)
                            <div class="sidebar-widget mb-5">
                                <h3 class="widget-title">{{__('service-details.downloadBrochure')}}</h3>
                                <a href="{{asset('storage/' . $service->information)}}" class="default-btn"
                                    style="width: 100%; text-align: center;">
                                    <i class="ri-download-line me-2"></i>{{__('service-details.download')}} 
                                </a>
                            </div>
                        @endif

                        <!-- Contact For Service -->
                        <div class="mb-5">
                            <div class="container">
                                <div class="align-items-center">
                                    <div>
                                        <div class="talk-content margin-zero">
                                            <h4>{{__('service-details.contact')}}</h4>
                                            <form action="https://formspree.io/f/xyzezaoe" method="post">
                                                <input type="hidden" value="KE1FBRWJqSJ5Rl0GflJd3GPetPqRdPKG8TCg25Jl">
                                                <div id="contactFormTwo" novalidate="true">
                                                    <div>
                                                        <div>
                                                            <div class="form-group">
                                                                <input style="background-color: #ececec" type="text"
                                                                    name="email" class="form-control" required=""
                                                                    data-error="{{__('service-details.nameErorr')}}" placeholder="{{__('service-details.name')}}">
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="form-group">
                                                                <input style="background-color: #ececec" type="email"
                                                                    name="email" class="form-control" required=""
                                                                    data-error="{{__('service-details.emailErorr')}}"
                                                                    placeholder="{{__('service-details.email')}}">
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="form-group">
                                                                <textarea style="background-color: #ececec" name="message"
                                                                    class="form-control" cols="30" rows="6" required=""
                                                                    data-error="{{__('service-details.messageErorr')}}"
                                                                    placeholder="{{__('service-details.message')}}"></textarea>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 text-center">
                                                            <button type="submit" class="default-btn disabled"
                                                                style="pointer-events: all; cursor: pointer;">{{__('service-details.send')}}<span></span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Other Services -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">{{__('service-details.other')}}</h3>
                            <div class="other-services">
                                @foreach ($services as $s)
                                    <div class="single-service mb-3 px-2">
                                        <a href="{{route('service_details' , $s->id)}}" class="d-flex align-items-center">
                                            <h5>{{ $s->name }}</h5>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Details Area -->
@endsection