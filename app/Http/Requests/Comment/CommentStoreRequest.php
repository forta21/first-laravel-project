<?php

namespace App\Http\Requests\Comment;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CommentStoreRequest extends FormRequest
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
            'content'        => 'required|string|min:10',
            'poster'         => 'required|image:jpg,jpeg,png|max:10240',
            'comment_ids'   => 'array',
            'comment_ids.*' => 'sometimes|integer'
        ];
    }
}
