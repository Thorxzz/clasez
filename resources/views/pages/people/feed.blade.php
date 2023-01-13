@extends('layouts.people')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex ">
                    <div>
                        <img class="img-avatar-feed" src="{{asset('assets/media/avatars/avatar17.png')}}" alt="">
                    </div>
                    <div style="margin-left: 15px;">
                        <div class="fw-semibold mb-1">{{Auth::user()->name}}</div>
                        <div class="fs-sm text-muted">Ketintang, Surabaya</div>
                    </div>
                </div>
                <div class="img-fluid block-content block-content-full bg-image" style="background-image: url('{{asset('assets/media/photos/photo26.jpg')}}');">
                    <img class="img-fluid bg-image" src="{{asset('assets/media/photos/photo26.jpg')}}" alt="">
                </div>
                <div class="block-content block-content-full block-content-sm bg-pulse">
                    <div class="fs-sm text-white">Trial Account</div>
                </div>
                <div class="block-content block-content-full">
                    <div class="mb-1"><i class="si si-clock fa-2x text-pulse"></i></div>
                    <div class="fs-sm text-muted">~ 6 months left</div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection