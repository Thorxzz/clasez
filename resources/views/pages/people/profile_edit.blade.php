@extends('layouts.people')

@section('content')

<div class="block block-rounded">
    <div class="block-content">
        <form action="{{route('people.profile.update', $user->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-7">
                    <div class="row mb-4">
                        <div class="col-6">
                            <label class="form-label" for="mega-firstname">Username</label>
                            <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Enter your firstname.." value="{{$user->name}}">
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="mega-lastname">Email</label>
                            <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Enter your lastname.." value="{{$user->email}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="mb-4">
                        <label class="form-label" for="mega-lastname">Photo Profile</label>
                        <input type="file" class="form-control form-control-lg" id="profile" name="profile" placeholder="Enter your username.." value="{{$user->profile}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="mb-4">
                        <label class="form-label" for="mega-bio">Bio</label>
                        <textarea class="form-control form-control-lg" id="bio" name="bio" rows="22" placeholder="Enter a few details about yourself..">{{$user->bio}}</textarea>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="mb-4">
                        <label class="form-label" for="mega-city">Where do you live?</label>
                        <input type="text" class="form-control form-control-lg" id="city" name="city" placeholder="Enter your location..">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="mega-skills">Skills</label>
                        <select class="form-select" id="mega-skills" name="mega-skills" size="7" multiple="">
                            <option value="1">HTML</option>
                            <option value="2">CSS</option>
                            <option value="3">JavaScript</option>
                            <option value="4">PHP</option>
                            <option value="5">Ruby</option>
                            <option value="6">Photoshop</option>
                            <option value="7">Illustrator</option>
                        </select>
                    </div>
                    <div class="row mb-4">
                        <div class="col-6">
                            <label class="form-label" for="mega-age">Birth Of Date</label>
                            <input type="date" class="form-control form-control-lg" id="bod" name="bod" placeholder="Enter your age.." value="{{$user->bod}}" >
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label d-block">Gender</label>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="mega-gender-group-female" name="mega-gender-group">
                            <label class="form-check-label" for="mega-gender-group-female">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="mega-gender-group-male" name="mega-gender-group">
                            <label class="form-check-label" for="mega-gender-group-male">Male</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-check opacity-50 me-1"></i> Complete Profile
                </button>
            </div>
        </form>
    </div>
</div>

@endsection