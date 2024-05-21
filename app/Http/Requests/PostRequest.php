<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use PhpParser\Node\Stmt\Return_;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
       /*  if ($this->user_id == auth()->user()->id) {
            return true;
        } else {
            return false;
        } */
        return true;
       
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

        $post = $this->route()->parameter('post');

        $rules = [
            'name' => 'required',
            'slug' => 'required|unique:posts',
            'status' => 'required|in:1,2',
            'file' => 'image:max:2048'
        ];

        if ($post) {
            
            $rules['slug'] = 'required|unique:posts,slug,' . $post->id; 
        }
        if($this->status == 2){
            $rules = array_merge($rules, [
                'category_id' => 'required', 
                'brand_id' => 'required', 
                'tags' => 'required',
                'extract' => 'required',
                'body' => 'required',
                 'price_reciente' => 'required' 
           
            ]);
        }
        return $rules;
    }
}
