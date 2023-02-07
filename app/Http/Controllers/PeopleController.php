<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PeopleController extends Controller
{
    public function index()
    {
        return view('pages.people.index');
    }

    public function search(Request $request)
    {
        $datas = User::where('name', 'like', '%' . $request->search . '%')->get();

        $count = $datas->count();
        return view('pages.people.search', compact([
            'datas',
            'count'
        ]));
    }

    public function feed()
    {
        $datas = Photo::all()->sortByDesc('created_at');
        $comments = Comment::all();

        return view('pages.people.feed', compact([
            'datas',
            'comments'
        ]));
    }

    public function create()
    {
        return view('pages.people.create');
    }

    public function store(Request $request)
    {
        Photo::create([
            'user_id' => $request->user_id,
            'caption' => $request->caption,
            'location' => $request->location,
            'image' => $request->file('image')->getClientOriginalName(),
        ]);

        if ($request->hasFile('image')) {
            $request->file('image')->move('images/', $request->file('image')->getClientOriginalName());
        };

        return redirect()->route('people.feed')->with('status', 'Image Has been uploaded');
    }

    public function message()
    {
        return view('pages.people.message');
    }

    public function profile($id)
    {
        $user = User::where('id', $id)->first();
        $photos = Photo::where('user_id', $id)->get();
        return view('pages.people.profile', compact([
            'user',
            'photos'
        ]));
    }

    public function edit($id)
    {
        $user = User::where('id', $id)->first();

        return view('pages.people.profile_edit', compact([
            'user'
        ]));
    }

    public function detail($id)
    {
        $photo = Photo::where('id', $id)->first();

        return view('pages.people.detailfeed', compact([
            'photo'
        ]));
    }

    public function like(Photo $photo, $id)
    {
        $photo->like($id, Auth::user()->id);
        
        return response()->json(['likeCount' => $photo->count(Auth::user()->id)]);
    }
}
