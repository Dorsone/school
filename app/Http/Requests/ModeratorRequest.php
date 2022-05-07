<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModeratorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'login' => ['required', 'unique:users', 'string', 'min:3', 'max:100'],
            'name_uz' => ['required', 'string', 'min:3', 'max:100'],
            'name_ru' => ['required', 'string', 'min:3', 'max:100'],
            'name_en' => ['required', 'string', 'min:3', 'max:100'],
            'phone' => ['required', 'regex:/^998[\d]{9}$/', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:6'],
        ];
    }
}
