@extends('layout.main')

@section('title', 'Edit Member')

@section('content')
    <!-- Start Page Banner Area -->
    <div class="page-banner-area jarallax"
        style="background-color: black; position: relative; z-index: 0; background-attachment: scroll; background-size: auto;"
        data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="page-banner-content aos-init aos-animate" data-aos="fade-right" data-aos-delay="50"
                data-aos-duration="500" data-aos-once="true">
                <h2 style="color: white">{{__('add-member.editMember')}}</h2>

                <ul>
                    <li>
                        <a href="{{route('home')}}">{{__('add-member.home')}}</a>
                    </li>
                    <li>
                        <a href="{{route('admin')}}">{{__('add-member.admin')}}</a>
                    </li>
                    <li>{{__('add-member.editMember')}}</li>
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
                        <form action="{{route('update_member' , $member->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div id="contactFormTwo" novalidate="true">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" required=""
                                                data-error="{{__('add-member.nameErorr')}}" placeholder="{{__('add-member.nameEn')}}"
                                                value="{{ $member->name_en }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name_ar" class="form-control" required=""
                                                data-error="{{__('add-member.nameErorr')}}" placeholder="{{__('add-member.nameAr')}}"
                                                value="{{ $member->name_ar }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="role" class="form-control" required=""
                                                data-error="{{__('add-member.roleErorr')}}" placeholder="{{__('add-member.roleEn')}}"
                                                value="{{ $member->role_en }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="role_ar" class="form-control" required=""
                                                data-error="{{__('add-member.roleErorr')}}" placeholder="{{__('add-member.roleAr')}}"
                                                value="{{ $member->role_ar }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <label class="pb-2 ps-2">{{__('add-member.photo')}}</label>
                                        <div class="form-group">
                                            <input type="file" name="image" class="form-control"
                                                data-error="{{__('add-member.photoErorr')}}">
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
                                            style="pointer-events: all; cursor: pointer;">{{__('add-member.save')}}<span></span></button>


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