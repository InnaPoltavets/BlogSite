<?php

namespace App\Http\Controllers;

use App\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class CommentsController extends Controller
{

    public static function save(Request $request)
    {
        $user = Auth::user();


        $validator = Validator::make($request->all(),
            [
                'content'=>'required'
            ]);

        $comment = new Comments();
        $data = [

            $comment->content = $request->get('content'),
            $comment->posts_id = $request->get('post_id'),

            $comment->users_id = $user['id']];


        $comment->save($data);

        return redirect('/');
    }
}
