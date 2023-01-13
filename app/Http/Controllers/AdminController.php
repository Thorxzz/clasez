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
 

        Photo::create([
            'user_id'=>$request->user_id,
            'name'=>$request->file('image')->getClientOriginalName(),
        ]);

        if ($request->hasFile('image')) {
            $request->file('image')->move('images/', $request->file('image')->getClientOriginalName());
        };
    
        return redirect()->route('admin.index')->with('status', 'Image Has been uploaded');
   
    }

}
