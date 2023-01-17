<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'caption',
        'user_id',
        'location',
        'image',
    ];

    public static function getCreatedAtAttribute($value){
        return Carbon::parse($value)->diffForHumans();
    }
}
