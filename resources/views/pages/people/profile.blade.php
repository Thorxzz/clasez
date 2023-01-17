@extends('layouts.people')

@section('content')

<div class="bg-image bg-image-bottom" style="background-image: url('{{asset('assets/media/photos/photo13@2x.jpg')}}');">
    <div class="bg-primary-dark-op py-4">
        <div class="content content-full text-center">
            <!-- Avatar -->
            <div class="mb-3">
                <a class="img-link" href="#">
                    <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{asset('assets/media/avatars/avatar17.png')}}" alt="">
                </a>
            </div>
            <!-- END Avatar -->

            <!-- Personal -->
            <h1 class="h3 text-white fw-bold mb-2">
                {{ Auth::user()->name}}
            </h1>
            <h2 class="h5 fw-medium text-white-75">
                <a class="text-primary-light" href="javascript:void(0)">{{ Auth::user()->email}}</a>
            </h2>
            <!-- END Personal -->

            <!-- Actions -->
            <button type="button" class="btn btn-primary me-1">
                <i class="fa fa-fw fa-envelope opacity-50 me-1"></i> Message
            </button>
            <a class="btn btn-alt-primary" href="be_pages_generic_profile_edit.html">
                <i class="fa fa-fw fa-pencil-alt opacity-50 mb-1"></i> Edit
            </a>
            <!-- END Actions -->
        </div>
    </div>
</div>
<div class="content">

    <div class="row items-push">
        <div class="col-md-6 col-xl-4">
            <!-- Story #7 -->
            <a class="block block-rounded d-flex flex-column h-100 mb-0" href="javascript:void(0)">
                <div class="block-content block-content-full bg-image flex-grow-0" style="height: 180px; background-image: url('{{asset('assets/media/photos/photo32.jpg')}}');">
                    <span class="badge bg-success fw-bold p-2 text-uppercase">
                        Travel
                    </span>
                </div>
                <div class="block-content flex-grow-1">
                    <h5 class="mb-1">
                        The mountains you have to climb
                    </h5>
                    <p class="fw-medium fs-sm text-muted">
                        Jose Wagner &middot; 9 min
                    </p>
                </div>
                <div class="block-content py-3 bg-body-light flex-grow-0">
                    <div class="row g-0 fs-sm text-center">
                        <div class="col-4">
                            <span class="text-muted fw-semibold">
                                <i class="far fa-fw fa-eye opacity-50 me-1"></i> 2.2k
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted fw-semibold">
                                <i class="fa fa-fw fa-heart opacity-50 me-1"></i> 169
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted fw-semibold">
                                <i class="fa fa-fw fa-comments opacity-50 me-1"></i> 25
                            </span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- END Story #7 -->
        </div>
        <div class="col-md-6 col-xl-4">
            <!-- Story #8 -->
            <a class="block block-rounded d-flex flex-column h-100 mb-0" href="javascript:void(0)">
                <div class="block-content block-content-full bg-image flex-grow-0" style="height: 180px; background-image: url('{{asset('assets/media/photos/photo27.jpg')}}');">
                    <span class="badge bg-primary fw-bold p-2 text-uppercase">
                        Inspiration
                    </span>
                </div>
                <div class="block-content flex-grow-1">
                    <h5 class="mb-1">
                        Start building your work habits
                    </h5>
                    <p class="fw-medium fs-sm text-muted">
                        Brian Cruz &middot; 5 min
                    </p>
                </div>
                <div class="block-content py-3 bg-body-light flex-grow-0">
                    <div class="row g-0 fs-sm text-center">
                        <div class="col-4">
                            <span class="text-muted fw-semibold">
                                <i class="far fa-fw fa-eye opacity-50 me-1"></i> 8.5k
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted fw-semibold">
                                <i class="fa fa-fw fa-heart opacity-50 me-1"></i> 95
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted fw-semibold">
                                <i class="fa fa-fw fa-comments opacity-50 me-1"></i> 25
                            </span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- END Story #8 -->
        </div>
        <div class="col-md-6 col-xl-4">
            <!-- Story #9 -->
            <a class="block block-rounded d-flex flex-column h-100 mb-0" href="javascript:void(0)">
                <div class="block-content block-content-full bg-image flex-grow-0" style="height: 180px; background-image: url('{{asset('assets/media/photos/photo23.jpg')}}');">
                    <span class="badge bg-danger fw-bold p-2 text-uppercase">
                        Adventure
                    </span>
                </div>
                <div class="block-content flex-grow-1">
                    <h5 class="mb-1">
                        Best places to see the northern lights
                    </h5>
                    <p class="fw-medium fs-sm text-muted">
                        Jesse Fisher &middot; 19 min
                    </p>
                </div>
                <div class="block-content py-3 bg-body-light flex-grow-0">
                    <div class="row g-0 fs-sm text-center">
                        <div class="col-4">
                            <span class="text-muted fw-semibold">
                                <i class="far fa-fw fa-eye opacity-50 me-1"></i> 7.6k
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted fw-semibold">
                                <i class="fa fa-fw fa-heart opacity-50 me-1"></i> 69
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted fw-semibold">
                                <i class="fa fa-fw fa-comments opacity-50 me-1"></i> 12
                            </span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- END Story #9 -->
        </div>
    </div>
    <div class="row items-push">
        <div class="col-md-6 col-xl-4">
            <!-- Story #10 -->
            <a class="block block-rounded block-link-pop d-flex flex-column h-100 mb-0" href="javascript:void(0)">
                <div class="block-content block-content-full bg-pulse flex-grow-0" style="height: 180px;">
                    <span class="badge bg-black-50 fw-bold p-2 text-uppercase">
                        Tutorial
                    </span>
                    <h3 class="h2 text-white-75 text-center mt-4">Laravel</h3>
                </div>
                <div class="block-content flex-grow-1">
                    <h5 class="mb-1">
                        Create a blog site in under 2 hours
                    </h5>
                    <p class="fw-medium fs-sm text-muted">
                        Sara Fields &middot; 24 min
                    </p>
                </div>
                <div class="block-content py-3 bg-body-light flex-grow-0">
                    <div class="row g-0 fs-sm text-center">
                        <div class="col-4">
                            <span class="text-muted fw-semibold">
                                <i class="far fa-fw fa-eye opacity-50 me-1"></i> 9.3k
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted fw-semibold">
                                <i class="fa fa-fw fa-heart opacity-50 me-1"></i> 480
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted fw-semibold">
                                <i class="fa fa-fw fa-comments opacity-50 me-1"></i> 463
                            </span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- END Story #10 -->
        </div>
        <div class="col-md-6 col-xl-4">
            <!-- Story #11 -->
            <a class="block block-rounded block-link-pop d-flex flex-column h-100 mb-0" href="javascript:void(0)">
                <div class="block-content block-content-full bg-flat flex-grow-0" style="height: 180px;">
                    <span class="badge bg-black-50 fw-bold p-2 text-uppercase">
                        Tutorial
                    </span>
                    <h3 class="h2 text-white-75 text-center mt-4">Vue.js</h3>
                </div>
                <div class="block-content flex-grow-1">
                    <h5 class="mb-1">
                        How to structure your Vue.js based app
                    </h5>
                    <p class="fw-medium fs-sm text-muted">
                        Barbara Scott &middot; 29 min
                    </p>
                </div>
                <div class="block-content py-3 bg-body-light flex-grow-0">
                    <div class="row g-0 fs-sm text-center">
                        <div class="col-4">
                            <span class="text-muted fw-semibold">
                                <i class="far fa-fw fa-eye opacity-50 me-1"></i> 3.7k
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted fw-semibold">
                                <i class="fa fa-fw fa-heart opacity-50 me-1"></i> 87
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted fw-semibold">
                                <i class="fa fa-fw fa-comments opacity-50 me-1"></i> 36
                            </span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- END Story #11 -->
        </div>
        <div class="col-md-6 col-xl-4">
            <!-- Story #12 -->
            <a class="block block-rounded block-link-pop d-flex flex-column h-100 mb-0" href="javascript:void(0)">
                <div class="block-content block-content-full bg-earth flex-grow-0" style="height: 180px;">
                    <span class="badge bg-black-50 fw-bold p-2 text-uppercase">
                        Tutorial
                    </span>
                    <h3 class="h2 text-white-75 text-center mt-4">Angular</h3>
                </div>
                <div class="block-content flex-grow-1">
                    <h5 class="mb-1">
                        Getting started with Google’s JS framework
                    </h5>
                    <p class="fw-medium fs-sm text-muted">
                        Megan Fuller &middot; 14 min
                    </p>
                </div>
                <div class="block-content py-3 bg-body-light flex-grow-0">
                    <div class="row g-0 fs-sm text-center">
                        <div class="col-4">
                            <span class="text-muted fw-semibold">
                                <i class="far fa-fw fa-eye opacity-50 me-1"></i> 4.9k
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted fw-semibold">
                                <i class="fa fa-fw fa-heart opacity-50 me-1"></i> 150
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted fw-semibold">
                                <i class="fa fa-fw fa-comments opacity-50 me-1"></i> 63
                            </span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- END Story #12 -->
        </div>
    </div>
</div>

@endsection