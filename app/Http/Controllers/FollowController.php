<?php

namespace App\Http\Controllers;
use App\Models\Follow;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function follow($following, $followers)
    {


        $follow = Follow::where('followers', $followers)->where('following', $following)->first();
        // return $follow;

        if ($follow) {
            Follow::where('followers', $followers)->where('following', $following)->delete();

            return redirect()->back();
        } else {
            Follow::create([
                'followers' => $followers,
                'following' => $following,
                'status' => 1
            ]);

            return redirect()->back();
        }

        return $id;
    }
}
