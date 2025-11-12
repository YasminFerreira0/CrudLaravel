<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $category = $this->route('category');
        return [
            'name' => [
                'required', 
                'string', 
                'max:100', 
                $category
                    ? Rule::unique('categories', 'name')->ignore($category->id)
                    : Rule::unique('categories', 'name'),
            
            ],
            'description' => ['nullable', 'string', 'max:255'],
        ];
    }
}
