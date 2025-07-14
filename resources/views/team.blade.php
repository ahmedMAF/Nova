@extends('layout.main')

@section('title', __('team.title'))

@section('meta')
    <meta name="description" content="{{ __('team.meta') }}">
@endsection

@section('content')

    @if (session('success'))
        <div class="container alert alert-success alert-dismissible fade show position-fixed start-50 translate-middle-x mt-3 shadow"
            role="alert" style="z-index: 1055; width:100%; top: 70px;">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Start Page Banner Area -->
    <div class="page-banner-area bg-5 jarallax"
        style="background-color: black; position: relative; z-index: 0; background-attachment: scroll; background-size: auto;"
        data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="page-banner-content aos-init aos-animate" data-aos="fade-right" data-aos-delay="50"
                data-aos-duration="500" data-aos-once="true">
                <h2 style="color: white">{{ __('team.team') }}</h2>

                <ul>
                    <li>
                        <a href="{{route('home')}}">{{ __('team.home') }}</a>
                    </li>
                    <li>{{ __('team.team') }}</li>
                </ul>
            </div>
        </div>
        <div id="jarallax-container-0"
            style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -100;">
            <div
                style="background-position: 50% 50%; background-size: 100%; background-repeat: no-repeat; position: fixed; top: 0px; left: 0px; width: 1484.66px; height: 541.5px; overflow: hidden; pointer-events: none; margin-left: -110.664px; margin-top: 30.75px; visibility: visible; transform: translateY(-30.75px) translateZ(0px);">
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Team Area -->
    <div class="team-area pt-100 pb-75">
        <div class="container">
            <div class="section-title section-style-two">
                <span>{{ __('team.member') }}</span>
                <h2>{{ __('team.ourTeam') }}<span class="overlay"
                        style="transform-origin: left 50% 0px; transform: matrix(0, 0, 0, 1, 0, 0);"></span></h2>
                <p></p>
                <div style="text-align: justify; ">
                    <p class="MsoNormal">
                        {{ __('team.ourTeamPart1') }}
                    </p>
                    <p class="MsoNormal">
                        {{ __('team.ourTeamPart2') }}
                    </p>
                    <p class="MsoNormal">
                        {{ __('team.ourTeamPart3') }}
                    </p>
                    <p class="MsoNormal">
                        <o:p></o:p>
                    </p>
                    <p class="MsoNormal">
                        <o:p></o:p>
                    </p>
                </div>
                <p></p>
            </div>

            @if(session('is_admin'))
                <div class="row justify-content-center">
                    @foreach ($members as $member)
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-team-card">
                                <div class="team-image" data-tilt="">
                                    <img src="{{asset('storage/' . $member->image)}}" alt="image">
                                </div>
                                <div class="team-content">
                                    <h3>{{$member->name}}</h3>
                                    <span>{{$member->role}}</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('edit_member', $member->id) }}" class="btn-custm">{{ __('team.edit') }}</a>
                                <form action="{{ route('delete_member', $member->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn-custm btn-custm-delete" value="{{ __('team.delete') }}">
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="row justify-content-center">
                    @foreach ($members as $member)
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-team-card">
                                <div class="team-image" data-tilt="">
                                    <img src="{{asset('storage/' . $member->image)}}" alt="image">
                                </div>
                                <div class="team-content">
                                    <h3>{{$member->name}}</h3>
                                    <span>{{$member->role}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
    <!-- End Team Area -->

    <!-- Start Overview Area -->
    <div class="overview-area pt-100 pb-75">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="overview-card">
                        <h3>{{ __('contact.call') }}</h3>
                        <span>
                            <a href="tel:9901234567">0597456498</a>
                        </span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="overview-card">
                        <h3>{{ __('contact.email') }}</h3>
                        <span>
                            <a href="../html/contact.html"><span style="margin: 0px" class="__cf_email__"
                                    data-cfemail="650d0c060a1f00250208040c094b060a08">nova.integrated.solutions@gmail.com</span></a>
                        </span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="overview-card">
                        <h3>{{ __('contact.support') }}</h3>
                        <span>
                            <a href="tel:15143125678">0597456498</a>
                        </span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="overview-card">
                        <h3>{{ __('contact.vist') }}</h3>
                        <span>{{ __('contact.vistPart1') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Overview Area -->
@endsection