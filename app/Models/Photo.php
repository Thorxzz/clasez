<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'caption',
        'user_id',
        'location',
        'image',
    ];

    public static function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }

    public static function like($photo_id)
    {
        return Like::where('photo_id', $photo_id)->count();
    }

    public static function status($photo_id)
    {
        $status = Like::where('photo_id', $photo_id)->where('user_id', Auth::user()->id)->first();

        if (!empty($status->status)) {
            return 1;
        } else {
            return -1;
        }
    }

    public static function count($user_id)
    {
        $count = Photo::where('user_id', $user_id)->count();

        return $count;
    }

    public function addlike($id, $user_id)
    {
        $photo = Photo::where('id', $id)->first();
        
        Like::create([
            'photo_id' => $photo_id,
            'user_id' => $user_id,
            'status' => 1
        ]);
    }
}
