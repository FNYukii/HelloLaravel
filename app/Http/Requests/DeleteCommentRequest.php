<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeleteCommentRequest extends FormRequest
{
    public function authorize()
    {
        return true; // 認証を常に許可
    }

    public function rules()
    {
        return [
            //
        ];
    }

    // Comment column values
    public function id(): int
    {
        // return (int) $this->route('commentId');
        return $this->input('id');
    }
}
