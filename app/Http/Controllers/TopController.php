<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class TopController extends Controller
{
    
    public function __invoke(Request $request)
    {
        // Eloquentモデルから、全データを取得
        $tweets = Comment::orderBy('created_at', 'DESC')->get();
        
        // Bladeテンプレートに$tweetsを渡して表示
        return view('Pages.top')
        ->with('tweets', $tweets);
    }
}
