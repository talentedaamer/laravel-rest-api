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
            'title' => 'required|unique:posts|max:255',
            'content' => 'required'
        ];
    }
    
    public function messages()
    {
        return [
            'title.unique' => 'Post title already exists',
            'title.required' => 'Post title is required',
            'content.required'  => 'Post content is required',
        ];
    }
}
