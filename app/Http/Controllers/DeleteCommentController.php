<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteCommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class DeleteCommentController extends Controller
{
    public function __invoke(DeleteCommentRequest $request)
    {
        // RequestからcommentIdを取得
        $commentId = $request->id();

        dd($commentId);

        // Commentを削除
        Comment::destroy($commentId);

        return redirect()
        ->route('topPage');
    }
}
