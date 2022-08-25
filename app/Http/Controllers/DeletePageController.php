<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class DeletePageController extends Controller
{
    public function __invoke(Request $request)
    {
        // RequestからcommentIdを取得
        $commentId = (int) $request->route('commentId');

        // Commentを取得
        $comment = Comment::where('id', $commentId)->firstOrFail();

        // DeletePageを表示
        return view('Pages.DeletePage')
        ->with('comment', $comment);
    }
}
