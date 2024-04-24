<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
        return [
            'name' => 'required|max:100',
            'description' => 'nullable|max:2000',
            'img_url' => 'file|max:1024|mimes:jpeg,jpg,png,gif,webp,bmp',
            'url_repo' => 'required',
            'type_id' => 'required|exists:types,id',
            'date' => 'nullable|date',
        ];
    }
}
