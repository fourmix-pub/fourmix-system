<?php

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;

class DailyViewRequest extends FormRequest
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
            'date' => 'required',
            'project_id' => 'required',
            'work_type_id' => 'required',
            'time' => 'required|numeric',
            'cost' => 'required|numeric',
            'note' => 'max:255',
        ];
    }
}
