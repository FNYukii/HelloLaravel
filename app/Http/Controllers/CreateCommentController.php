<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CreateCommentController extends Controller
{
    public function __invoke(CreateCommentRequest $request)
    {
        // Commentオブジェクトを生成
        $comment = new Comment;

        // Commentの各プロパティに値を格納
        $comment->user_id = $request->userId();
        $comment->content = $request->content();

        // 新規Commentをデータベースに保存
        $comment->save();

        // CreatePageにリダイレクト
        return redirect()->route('createPage');
    }
}
