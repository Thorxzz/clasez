<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    
    public function create(Request $request, $id)
    {
        Comment::create([
            'comment' => $request->comment,
            'user_id' => Auth::user()->id,
            'photo_id' => $id
        ]);
       return redirect()->back();
    }

    public function delete($id)
    {

        Comment::where('id', $id)->delete();

        return redirect()->back();
    }



}
