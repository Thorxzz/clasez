@extends('layouts.people')

@section('content')


<div class="container" style="padding:30px;">
    <div class="row justify-content-center">

        @foreach($datas as $data)
        @if(App\Models\Follow::checkFollowing($data->user_id) == true) 
        <div class="col-md-8">
            <div class="block block-rounded block-link-shadow">
                <div class="block-content block-content-full d-flex ">
                    <div>
                        <a href="{{route('people.profile', App\Models\User::user($data->user_id)->id)}}">
                            <img class="img-avatar-feed" src="{{asset('profiles/'. App\Models\User::user($data->user_id)->profile) }}" alt="">
                        </a>
                    </div>
                    <div style="margin-left: 15px;">
                        <a href="{{route('people.profile', App\Models\User::user($data->user_id)->id)}}">
                            <div class="fw-semibold mb-1">{{App\Models\User::user($data->user_id)->name}}</div>
                        </a>
                        <div class="fs-sm text-muted">{{$data->location}}</div>
                    </div>
                </div>
                <div class="img-fluid block-content block-content-full bg-image" style="background-image: url('{{ asset('images/'.$data->image) }}'); z-index:10;">
                    <img class="img-fluid bg-image" src="{{ asset('images/'.$data->image) }}" style="visibility: hidden;">
                </div>
                <div class="block-content">
                    <div class="items-push row">
                        <div class="col-1 text-center" style="margin-bottom: 0.5rem;">
                            <div class="mb-1">
                                @php
                                $status = App\Models\Photo::status($data->id)
                                @endphp
                                @if($status == 1)
                                <form action="{{route('people.feed.like', $data->id)}}">
                                    <button type="submit" style="border: none; background-color:white;"><i class="fa fa-heart fa-2x"></i></button>
                                </form>

                                @else
                                <form action="{{route('people.feed.like', $data->id)}}">
                                    <button type="submit" style="border: none; background-color:white;"><i class="far fa-heart fa-2x"></i></button>
                                </form>

                                @endif
                            </div>
                        </div>
                        <div class="col-1 text-center" style="margin-bottom: 0.5rem;">
                            <div class="mb-1"><i class="far fa-comment fa-2x" data-bs-toggle="modal" data-bs-target="#modal-large-{{$data->id}}"></i></div>
                        </div>
                        <div class="col-1 text-center" style="margin-bottom: 0.5rem;">
                            <input type="hidden" value="{{route('people.detail', $data->id)}}" id="copyText" readonly>
                            <button onclick="copy()" class="mb-1" id="copyBtn" data-id="{{$data->id}}" style="border: none; background-color:white;"><i class="far fa-paper-plane fa-2x"></i></button>

                        </div>
                    </div>
                    <div class="fs-lg mb-3">{{App\Models\Photo::like($data->id)}} likes</div>
                    <div class="fs-md mb-2">{{$data->caption}}</div>
                    <div class="fs-sm text-muted mb-3">{{ App\Models\Photo::getCreatedAtAttribute($data->created_at)}}</div>
                </div>
            </div>
        </div>
        <div class="modal" id="modal-large-{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-large-{{$data->id}}" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="block block-rounded shadow-none mb-0">
                        <div class="block-header block-header-default">
                            <div class="d-flex ">
                                <div>
                                    <img class="img-avatar-feed" src="{{asset('assets/media/avatars/avatar17.png')}}" alt="" style="border-radius:  50%!important; height: 40px; width:40px;">
                                </div>
                                <div style="margin-left: 15px;">
                                    <div class="fs-xs fw-semibold mb-1">{{App\Models\User::user($data->user_id)->name}}</div>
                                    <div class="fs-xs text-muted">{{$data->location}}</div>
                                </div>
                            </div>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content fs-sm" style="padding: 0px;">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="img-fluid block-content block-content-full bg-image" style="background-image: url('{{ asset('images/'.$data->image) }}'); z-index:10; border-radius: 0 0 0 15px;">
                                        <img class="img-fluid bg-image" src="{{ asset('images/'.$data->image) }}" style="visibility: hidden;">
                                    </div>
                                </div>
                                <div class="col-md-4 block block-rounded shadow-none mb-0 overflow-auto" style="height: 750px;">
                                    <div class="d-flex block-content">
                                        <div>
                                            <img class="img-avatar-feed" src="{{asset('assets/media/avatars/avatar17.png')}}" alt="" style="border-radius:  50%!important; height: 40px; width:40px;">
                                        </div>
                                        <div>
                                            <div class="fs-xs fw-semibold mb-1">{{App\Models\User::user($data->user_id)->name}} </div>

                                            <p class="justify-content">{{$data->caption}}</p>
                                        </div>
                                    </div>
                                    @php
                                    $cs = App\Models\Comment::comment($data->id)
                                    @endphp

                                    @foreach($cs as $c)
                                    <div class="d-flex block-content">
                                        <div>
                                            <img class="img-avatar-feed" src="{{asset('assets/media/avatars/avatar17.png')}}" alt="" style="border-radius:  50%!important; height: 40px; width:40px;">
                                        </div>
                                        <div>
                                            <div class="d-flex">

                                                <div class="fs-xs fw-semibold mb-1 p-2">{{App\Models\Comment::name($c->user_id)->name}} </div>
                                                
                                                <div class="dropdown dropend push ml-auto p-2">
                                                    <i class="fa fa-ellipsis" id="dropdown-dropright-outline-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="pointer:cursor;"></i>
                                                    <div class="dropdown-menu fs-sm" aria-labelledby="dropdown-dropright-outline-primary" style="">
                                                        <a class="dropdown-item" href="javascript:void(0)">Laporkan</a>
                                                        @if($c->user_id == Auth::user()->id)
                                                        <a class="dropdown-item" href="{{route('people.feed.comment.delete', App\Models\Comment::id($c->id)->id)}}">Delete</a>
                                                        @endif
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="javascript:void(0)">Cancel</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <p class="justify-content">{{$c->comment}}</p>

                                            <div class="fs-sm text-muted mb-3">{{ App\Models\Comment::getCreatedAtAttribute($c->created_at)}}</div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="block-content  block-content-sm text-end border-top pb-5">
                                        <form class="row row-cols-lg-auto g-3 align-items-center" action="{{route('people.feed.comment', $data->id)}}" method="POST">
                                            @csrf
                                            <div class="col-12">
                                                <input type="text" class="form-control" id="comment" name="comment" placeholder="Comment">
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary"><i class="far fa-paper-plane"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>





@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $('.btn-share').click(function() {
        var itemId = $(this).data('item');
        // ... logic untuk membagikan item
        const copyBtn = document.getElementById('copyBtn');
        const copyText = document.getElementById('copyText');

        copyBtn.onclick = () => {
            copyText.select(); // Selects the text inside the input
            document.execCommand('copy'); // Simply copies the selected text to clipboard 
            Swal.fire({ //displays a pop up with sweetalert
                icon: 'success',
                title: 'Link copied to clipboard '.itemId,
                showConfirmButton: false,
                timer: 1000
            });
        }
    });
</script>
<script>
    function copy() {
        const $id = $(this).attr("data-id");
        const copyBtn = document.getElementById('copyBtn');
        const copyText = document.getElementById('copyText');

        copyBtn.onclick = () => {
            copyText.select(); // Selects the text inside the input
            document.execCommand('copy'); // Simply copies the selected text to clipboard 
            Swal.fire({ //displays a pop up with sweetalert
                icon: 'success',
                title: 'Link copied to clipboard '.$id,
                showConfirmButton: false,
                timer: 1000
            });
        }
    }
</script>



@endsection