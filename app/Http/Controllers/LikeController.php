<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like($id)
    {
        $like = Like::where('photo_id', $id)->where('user_id', Auth::user()->id)->first();

        if ($like) {
            Like::where('photo_id', $id)->where('user_id', Auth::user()->id)->delete();

            return redirect()->back();
        } else {
            Like::create([
                'photo_id' => $id,
                'user_id' => Auth::user()->id,
                'status' => 1
            ]);

            return redirect()->back();
        }

        return $id;
    }
}
