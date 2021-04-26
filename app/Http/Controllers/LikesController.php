<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikesController extends Controller
{
    public function like($id)
    {
        Like::create([
          'course_id' => $id,
          'user_id' =>  Auth::id(),
        ]);

        return redirect()->back();
    }

    public function unlike($id)
    {
        $like = Like::where('course_id', $id)->where('user_id', Auth::id())->first();

        $like->delete();

        return redirect()->back();

    }
}
