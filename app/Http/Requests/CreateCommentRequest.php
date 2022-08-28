<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class CreateCommentRequest extends FormRequest
{
    public function authorize()
    {
        return true; // 認証を常に許可
    }

    public function rules()
    {
        return [
            'content' => 'required|max:140' // バリデーションを設定
        ];
    }

    public function userId(): int
    {
        return $this->user()->id;
    }

    public function content(): string
    {
        return $this->input('content'); // HTTPリクエストパラメータを返す
    }
}
