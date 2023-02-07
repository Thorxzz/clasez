<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update($id, Request $request)
    {

        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'bio' => $request->bio,
            'bod' => $request->bod,
            'profile' => $request->file('profile')->getClientOriginalName()
        ]);
        if ($request->hasFile('profile')) {
            $request->file('profile')->move('profiles/', $request->file('profile')->getClientOriginalName());
        }
        return redirect()->route('people.profile', $id);
    }

    
}
