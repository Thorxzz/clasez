<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $datas = Photo::all();
        $users = User::where('role_id', 2)->get();

        return view('pages.admin.index', compact([
            'datas',
            'users'

        ]));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    
           ]);
    
           $name = $request->file('image')->getClientOriginalName();
    
           $path = $request->file('image')->store('public/images');
    
    
           $save = new Photo;
    
           $save->name = $name;
           $save->path = $path;
           $save->user_id = $request->user_id;
    
           $save->save();
    
           return redirect()->route('admin.index')->with('status', 'Image Has been uploaded');
   
    }

}
