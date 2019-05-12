<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'author' => 'required',
            'comment' => 'required|max:500',
            'vote' => 'required'
        ];
    }
    
    public function messages()
    {
        return [
            'author.required' => 'Comment Author is required',
            'comment.required' => 'Comment Content is required',
            'vote.required'  => 'Comment Vote is required',
        ];
    }
}
