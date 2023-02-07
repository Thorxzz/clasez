<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Carbon\Carbon;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo_id',
        'user_id',
        'comment'
    ];

    public static function comment($photo_id)
    {
        return Comment::where('photo_id', $photo_id)->get();
    }

    public static function count($photo_id)
    {
        return Comment::where('photo_id', $photo_id)->count();
    }

    public static function name($user_id)
    {
        return User::where('id', $user_id)->first();
    }

    public static function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }
    
    public static function id($id)
    {
        return Comment::where('id', $id)->first();
    }
    

}
