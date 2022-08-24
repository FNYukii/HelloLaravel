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

        // TODO: HTTPリクエストのパラメータからCommentの内容を取得
        $comment->content = $request->content();

        // TODO: 新規Commentをデータベースに保存
        $comment->save();

        // TODO: CreatePageにリダイレクト
        return redirect()->route('topPage');
    }
}
