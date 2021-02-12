<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostConfirmRequest extends FormRequest
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
            'title' =>'required|string|max:20',
            'body' =>'required|string|max:255',
            'image' =>'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'シューズ名を入力してください。',
            'title.max' => 'シューズ名の文字数は20文字以内です',
            'body.required'  => '投稿内容を入力してください。',
            'body.max' => '投稿内容の文字数は255文字以内です',
            'image.required' => '画像を選択してください',
        ];
    }
}
