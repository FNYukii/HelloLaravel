<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class UpdatePageController extends Controller
{
    public function __invoke(Request $request)
    {
        // 指定されたCommentを取得
        $commentId = (int) $request->route('commentId');
        $comment = Comment::where('id', $commentId)->firstOrFail();
        
        // Updateページを返す
        return view('Pages.UpdatePage')
        ->with('comment', $comment);
    }
}
