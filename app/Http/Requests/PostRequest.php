<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => [
                'required',
                'max:255',
            ],
            'category_id' => [
                'required',
                'numeric',
            ],
            'image' => [
                'nullable'
            ],
            'tags' => [
                'nullable'
            ],
            'excerpt' => [
                'nullable'
            ],
            'content' => [
                'required'
            ],
        ];
    }
}
