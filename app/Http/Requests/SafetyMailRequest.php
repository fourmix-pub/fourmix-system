<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SafetyMailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max: 20',
            'contents' => 'required|string|max: 1000',
            'testMail' => 'nullable|email',
        ];
    }
}
