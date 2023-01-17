@extends('layouts.people')

@section('content')


<div class="container" style="padding:30px;">
    <div class="row justify-content-center">

        @foreach($datas as $data)
        <div class="col-md-8">
            <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex ">
                    <div>
                        <img class="img-avatar-feed" src="{{asset('assets/media/avatars/avatar17.png')}}" alt="">
                    </div>
                    <div style="margin-left: 15px;">
                        <div class="fw-semibold mb-1">{{Auth::user()->name}}</div>
                        <div class="fs-sm text-muted">{{$data->location}}</div>
                    </div>
                </div>
                <div class="img-fluid block-content block-content-full bg-image" style="background-image: url('{{ asset('images/'.$data->image) }}'); z-index:10;">
                    <img class="img-fluid bg-image" src="{{ asset('images/'.$data->image) }}" style="visibility: hidden;">
                </div>
                <div class="block-content">
                    <div class="items-push row">
                        <div class="col-1 text-center" style="margin-bottom: 0.5rem;">
                            <div class="mb-1"><i class="far fa-heart fa-2x"></i></div>
                        </div>
                        <div class="col-1 text-center" style="margin-bottom: 0.5rem;">
                            <div class="mb-1"><i class="far fa-comment fa-2x"></i></div>
                        </div>
                        <div class="col-1 text-center" style="margin-bottom: 0.5rem;">
                            <div class="mb-1"><i class="far fa-paper-plane fa-2x"></i></div>
                        </div>
                    </div>
                    <div class="fs-lg mb-3">1034 likes</div>
                    <div class="fs-md mb-2">{{$data->caption}}</div>
                    <div class="fs-sm text-muted mb-3">{{ App\Models\Photo::getCreatedAtAttribute($data->created_at)}}</div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection