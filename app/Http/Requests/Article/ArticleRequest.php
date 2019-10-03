<?php

namespace App\Http\Requests\Article;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required|numeric',    //ageはDBではint型なのにここではどうしてnumericとしているのでしょうか？　最終的にはDBに登録する時点で整数に丸められるのだが……。
            'area' => 'required',
            'gender' => 'required|integer|min:1|',
            // 'media1' => 'required', 必須項目にすると絶対に選択しないといけなくなる。どちらか、若しくは両方を選択している、という状況をvalidateできないといけない。
            // 'media2' => 'required',
            'note' => 'required',
            'image' => 'required',
        ];
    }
}
