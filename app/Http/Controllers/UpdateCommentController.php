<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;

class UpdateCommentController extends Controller
{
    public function __invoke(UpdateCommentRequest $request)
    {
        // 編集するCommentのIDをUpdateCommentRequestから取得
        $commentId = $request->id();

        // Eloquentモデルから編集前のCommentを取得
        $comment = Comment::where('id', $commentId)->firstOrFail();

        // Requestから編集後のContentを取得し、編集後のCommentを生成
        $comment->content = $request->content();

        // 上書き保存
        $comment->save();

        // リダイレクトしUpdatePageを返す
        return redirect(route('topPage'));
    }
}
