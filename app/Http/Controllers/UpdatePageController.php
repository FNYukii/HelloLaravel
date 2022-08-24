<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdatePageController extends Controller
{
    public function __invoke(Request $request)
    {
        // 指定されたCommentを取得

        // Updateページを返す
        return view('Pages.UpdatePage');
    }
}
