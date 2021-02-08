<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class ConfirmRequest extends FormRequest
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
            'title' =>'required|title|string|max:20',
            'body' =>'required|body|string|max:255',
            'image' =>'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
        public function messages()
    {
        return [
            'title.required' => 'タイトルを入力してください。',
            'title.max' => 'タイトルは20文字以内にしてください。',
            'body.required'  => '本文を入力してください。',
            'image.required' => '画像を選択してください',
        ];
    }
}
