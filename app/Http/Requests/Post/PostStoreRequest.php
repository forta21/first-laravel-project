<?php

namespace App\Http\Requests\Post;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'           => 'required|string|min:3|max:25',
            'description'    => 'string|min:3|max:25',
            'content'        => 'required|string|min:10',
            'poster'         => 'required|image:jpg,jpeg,png|max:10240',
            'category_ids'   => 'array',
            'category_ids.*' => 'integer'
            ];
    }
}
