<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StorePostRequest extends FormRequest
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
        if ($this->method() == 'PUT') 
        {
            $title_rules = 'required|min:3|unique:posts,title,'.$this->post; 
            $content_rules = 'required|min:10';
        }
        else 
        {
            $title_rules = 'required|min:3|unique:posts,title';
            $content_rules = 'required|min:10';
        }
        return [
            'title' => $title_rules,
            'content'  => $content_rules,
        ];
    }
   
}
