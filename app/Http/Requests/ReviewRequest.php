<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
            'first_name' => 'required|string|min:3|max:255',
            'last_name' => 'required|string|min:3|max:255',
            'level_id' => 'required|integer|exists:levels,id',
            'phone' => 'required|regex:/^998[\d]{9}$/',
            'role' => 'required|in:Mother,Father,Other',
            'message' => 'required|string|max:255',
        ];
    }
}
