<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Follow extends Model
{
    use HasFactory;

    protected $fillable = [
        'followers',
        'following',
        'status'
    ];

    public static function status($following, $followers)
    {
        $cek = Follow::where('following', $following)->where('followers', $followers)->first();
        if (!empty($cek)) {
            return 1;
        }
        else {
            return 0;
        }
    }

    public static function following($followers)
    {
        return Follow::where('followers', $followers)->count();
    }

    public static function followers($following)
    {
        return Follow::where('following', $following)->count();
    }

    public static function checkFollowing($user_id)
    {
        $cek = false;

        $followings = Follow::where('followers', Auth::user()->id)->get();
        foreach ($followings as $following) {
            if ($user_id == $following->following) {
                $cek = true;
            }
            elseif ($user_id == Auth::user()->id) {
                $cek = true;
            }
        }

        return $cek;
    }
}
