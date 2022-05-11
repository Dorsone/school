<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentStoreRequest extends FormRequest
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
            'first_name' => ['required', 'string', 'min:3', 'max:50'],
            'last_name' => ['required', 'string', 'min:3', 'max:50'],
            'phone' => ['required', 'regex:/^998[\d]{9}$/', 'unique:students'],
            'born' => ['required', 'date'],
            'level_id' => ['required', 'integer', 'exists:levels,id'],
            'image' => ['mimes:png,jpg,jpeg', 'max:5120'],
        ];
    }
}
