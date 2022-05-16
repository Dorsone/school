<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherStoreRequest extends FormRequest
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
            "name_uz" => ['required', 'string', 'min:3', 'max:255'],
            "role_uz" => ['required', 'string', 'min:3', 'max:255'],
            "description_uz" => ['required', 'string', 'min:3', 'max:255'],
            "name_ru" => ['required', 'string', 'min:3', 'max:255'],
            "role_ru" => ['required', 'string', 'min:3', 'max:255'],
            "description_ru" => ['required', 'string', 'min:3', 'max:255'],
            "name_en" => ['required', 'string', 'min:3', 'max:255'],
            "role_en" => ['required', 'string', 'min:3', 'max:255'],
            "description_en" => ['required', 'string', 'min:3', 'max:255'],
            "facebook" => ['required', 'url'],
            "twitter" => ['required', 'url'],
            "instagram" => ['required', 'url'],
            "telegram" => ['required', 'url'],
            'image' => ['mimes:png,jpg,jpeg', 'max:5120', 'required'],
        ];
    }
}
