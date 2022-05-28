<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LevelStoreRequest extends FormRequest
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
            'from_time' => ['required', 'date_format:H:i'],
            'to_time' => ['required', 'date_format:H:i'],
            "name_uz" => ['required', 'string', 'min:2', 'max:255'],
            "name_ru" => ['required', 'string', 'min:2', 'max:255'],
            "name_en" => ['required', 'string', 'min:2', 'max:255'],
            'teacher_id' => ['required', 'exists:teachers,id'],
        ];
    }
}
