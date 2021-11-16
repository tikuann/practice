<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'post.title' => 'required|string|max:100',
            'post.material' => 'required|string|max:4000',
            'post.procedure' => 'required|string|max:4000',
            'post.quote' => 'required|string|max:200',
        ];
    }
}
