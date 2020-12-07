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
        // 認証の仕組みはないためtrueを返す
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
            'title' => 'required|min:3',
            'body' => 'required',
        ];
    }

    /**
     * Get the error messages when the wrong request received.
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Please enter a title!',
            'body.required' => 'Please enter a body!',
        ];
    }
}
