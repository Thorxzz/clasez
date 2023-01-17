<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use App\Models\Photo;
use Illuminate\Support\Facades\Auth;

class PeopleController extends Controller
{
    public function index()
    {
        return view('pages.people.index');
    }
    
    public function feed()
    {
        $hour;
        $day;

        $datas = Photo::where('user_id', Auth::user()->id)->get();
        
        return view('pages.people.feed', compact([
            'datas'            
        ]));
    }
    
    public function create()
    {
        return view('pages.people.create');
    }

    public function store(Request $request)
    {
        Photo::create([
            'user_id'=>$request->user_id,
            'caption'=>$request->caption,
            'location'=>$request->location,
            'image'=>$request->file('image')->getClientOriginalName(),
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

    public function profile()
    {
        return view('pages.people.profile');
    }

}
