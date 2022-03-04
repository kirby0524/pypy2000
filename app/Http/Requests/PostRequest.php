<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'post.title' => 'required|max:100',
            'post.event1' => 'required|string|max:4000',
            'post.event2' => 'required|string|max:4000',
            'post.event3' => 'required|string|max:4000',
            'post.category_id'  => 'required|string|max:4000',
            
        ];
    }
}