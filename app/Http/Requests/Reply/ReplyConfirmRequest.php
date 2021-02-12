<?php

namespace App\Http\Requests\Reply;

use Illuminate\Foundation\Http\FormRequest;

class ReplyConfirmRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'body' =>'required|string|max:55',
        ];
    }
     public function messages()
    {
        return [
            'body.required' =>  '投稿内容を入力してください。',
            'body.max' => '返信内容の文字数は55文字以内です',
            ];
    }
}
