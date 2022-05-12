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
        $regex_url = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
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
            "facebook" => ['required', 'regex:'.$regex_url],
            "twitter" => ['required', 'regex:'.$regex_url],
            "instagram" => ['required', 'regex:'.$regex_url],
            "telegram" => ['required', 'regex:'.$regex_url],
            'image' => ['mimes:png,jpg,jpeg', 'max:5120', 'required'],
        ];
    }
}
