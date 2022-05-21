<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use function Symfony\Component\Translation\t;

class LessonUpdateRequest extends FormRequest
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
            'level_id' => ['required', 'integer', 'exists:levels,id'],
            'image' => ['mimes:png,jpg,jpeg', 'max:5120'],
            'title_uz' => ['required', 'string'],
            'description_uz' => ['required', 'string'],
            'title_ru' => ['required', 'string'],
            'description_ru' => ['required', 'string'],
            'title_en' => ['required', 'string'],
            'description_en' => ['required', 'string'],
            'from_time' => ['required', 'date_format:H:i:s'],
            'to_time' => ['required', 'date_format:H:i:s'],
        ];
    }
}
