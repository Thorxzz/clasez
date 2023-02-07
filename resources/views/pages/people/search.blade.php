@extends('layouts.people')

@section('content')
<div class="content">
    <!-- Search -->
    <form class="push" action="{{route('people.search')}}" method="GET">
        <div class="input-group input-group-lg">
            <input name="search" type="text" class="form-control" placeholder="Search web app..">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </form>
    <!-- END Search -->

    <!-- Results -->
    <div class="block block-rounded overflow-hidden" style="background-color: #f0f2f5;">
        <div class="block-content block-content-full tab-content overflow-hidden">
            <div class="tab-pane fade active show" id="search-photos" role="tabpanel" aria-labelledby="search-photos-tab" tabindex="0">
                <div class="fs-3 fw-semibold py-4 mb-3 text-center border-bottom">
                    <span class="text-primary fw-bold">{{$count}} </span><mark class="text-danger">users</mark> found
                </div>
                <div class="row items-push">
                    @foreach($datas as $data)
                    <div class="col-md-6 col-xl-3">
                        <div class="block block-rounded text-center">
                            <div class="block-content block-content-full">
                                <img class="img-avatar" src="{{asset('profiles/'. $data->profile)}}" alt="">
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <div class="fw-semibold mb-1">{{$data->name}}</div>
                            </div>
                            <div class="block-content block-content-full">
                                
                                <a class="btn btn-sm btn-alt-primary" href="{{route('people.follow', ['following' => $data->id , 'followers' => Auth::user()->id])}}">
                                    <i class="fa fa-plus opacity-50 me-1"></i> Follow
                                </a>

                                <a class="btn btn-sm btn-alt-secondary" href="{{route('people.profile', $data->id)}}">
                                    <i class="fa fa-user-circle opacity-50 me-1"></i>Profile
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- END Results -->
</div>
@endsection