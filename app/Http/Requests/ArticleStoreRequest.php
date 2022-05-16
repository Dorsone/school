<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleStoreRequest extends FormRequest
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
            'image' => ['mimes:png,jpg,jpeg', 'max:5120', 'required'],
            'title_uz' => ['required', 'string'],
            'content_uz' => ['required', 'string'],
            'title_ru' => ['required', 'string'],
            'content_ru' => ['required', 'string'],
            'title_en' => ['required', 'string'],
            'content_en' => ['required', 'string'],
            'title_preview_uz' => ['required', 'string', 'min:3', 'max:255'],
            'content_preview_uz' => ['required', 'string', 'min:3', 'max:255'],
            'title_preview_ru' => ['required', 'string', 'min:3', 'max:255'],
            'content_preview_ru' => ['required', 'string', 'min:3', 'max:255'],
            'content_preview_en' => ['required', 'string', 'min:3', 'max:255'],
            'title_preview_en' => ['required', 'string', 'min:3', 'max:255'],
        ];
    }
}
