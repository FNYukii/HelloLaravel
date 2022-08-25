<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCommentRequest extends FormRequest
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

    // Comment column values
    public function id(): int
    {
        // return (int) $this->route('commentId');
        return $this->input('id');
    }

    public function content(): string
    {
        return $this->input('content');
    }
}
