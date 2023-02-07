@extends('layouts.people')

@section('content')

<div class="bg-image bg-image-bottom" style="background-image: url('{{asset('assets/media/photos/photo13@2x.jpg')}}');">
    <div class="bg-primary-dark-op py-4">
        <div class="content content-full text-center">
            <!-- Avatar -->
            <div class="mb-3">
                <a class="img-link" href="#">
                    <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{asset('profiles/'.$user->profile)}}" alt="">
                </a>
            </div>
            <!-- END Avatar -->

            <!-- Personal -->
            <h1 class="h3 text-white fw-bold mb-2">
                {{ $user->name}}
            </h1>
            <h2 class="h5 fw-medium text-white-75">
                <a class="text-primary-light" href="javascript:void(0)">{{ $user->email}}</a>
            </h2>
            <!-- END Personal -->
            <div class="list-inline">
                @if($user->id == Auth::user()->id)
                <a class="btn btn-alt-primary" href="{{route('people.profile.edit', $user->id)}}">
                    <i class="fa fa-fw fa-pencil-alt opacity-50 mb-1"></i> Edit
                </a>
                @else
                <form action="{{route('people.follow', ['following' => $user->id , 'followers' => Auth::user()->id])}}">

                    <button type="button" class="btn btn-alt-primary">
                        <i class="fa fa-fw fa-envelope opacity-50 me-1"></i> Message
                    </button>
                    @if(App\Models\Follow::status($user->id, Auth::user()->id) != 1)
                    <button type="submit" class="btn btn-alt-primary">
                        <i class="si si-fw si-user-follow opacity-50 me-1"></i> Follow
                    </button>
                    @else
                    <button type="submit" class="btn btn-alt-primary">
                        <i class="si si-fw si-user-follow opacity-50 me-1"></i> Stop Following
                    </button>
                    @endif
                </form>
                @endif
            </div>
            <!-- Actions -->
            <!-- END Actions -->
        </div>
    </div>
</div>
<div class="content">

    <div class="row items-push">

        @foreach($photos as $photo)
        <div class="col-md-6 col-xl-4">
            <!-- Story #7 -->
            <a class="block block-rounded d-flex flex-column h-100 mb-0" href="{{route('people.detail', $photo->id)}}">
                <div class="block-content block-content-full bg-image flex-grow-0" style="height: 180px; background-image: url('{{ asset('images/'.$photo->image) }}');">
                </div>
                <div class="block-content flex-grow-1">
                    <h5 class="mb-1">
                        {{$photo->caption}}
                    </h5>
                    <p class="fw-medium fs-sm text-muted">
                        {{ App\Models\Photo::getCreatedAtAttribute($photo->created_at)}}
                    </p>
                </div>
                <div class="block-content py-3 bg-body-light flex-grow-0">
                    <div class="row g-0 fs-sm text-center">
                        <div class="col-4">
                            <span class="text-muted fw-semibold">
                                <i class="fa fa-fw fa-heart opacity-50 me-1"></i> {{App\Models\Photo::like($photo->id)}}
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted fw-semibold">
                                <i class="fa fa-fw fa-comments opacity-50 me-1"></i> {{App\Models\Comment::count($photo->id)}}
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted fw-semibold">
                                <i class="far fa-fw fa-eye opacity-50 me-1"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- END Story #7 -->
        </div>
        @endforeach

    </div>
</div>

@endsection