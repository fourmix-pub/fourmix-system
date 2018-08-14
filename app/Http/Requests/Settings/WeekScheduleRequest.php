<?php

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;

class WeekScheduleRequest extends FormRequest
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
        switch ($this->method()) {
            case 'POST':
                {
                    return [
                        'schedule' => 'required|string|max:300',
                        'result' => 'nullable|string|max:300',
                        'share' => 'nullable|string|max:500',
                        'date' => 'required|date'
                    ];
                }
            case 'PUT':
            case 'PATCH':
                {
                    return [
                        'schedule' => 'required|string|max:300',
                        'result' => 'required|string|max:300',
                        'share' => 'nullable|string|max:500',
                    ];
                }
            case 'GET':
            case 'DELETE':
                {
                    return [];
                }
        }
    }
}
