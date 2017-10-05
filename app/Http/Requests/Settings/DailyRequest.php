<?php

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;

class DailyRequest extends FormRequest
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
            'work_type_id' => 'required',
            'job_type_id' => 'required',
            'project_id' => 'required',
            'date' => 'required',
            'rest' => 'numeric|nullable',
            'note' => 'max: 200',
            'start' => 'required|date_format:H:i',
            'end' => 'required|endTime|after:start|date_format:H:i',
        ];
    }
}
