<?php

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
        if ($this->getMethod() == 'PATCH') {
            return [
                'name'          => 'required|max:225',
                'department_id' => 'required',
                'cost'          => 'required|numeric',
                'start'         => 'required',
                'end'           => 'required',
                'email'         => [
                    'required',
                    Rule::unique('users')->ignore($this->route('user')->id),
                ],
            ];
        } else {
            return [
                'name'          => 'required|max:225',
                'department_id' => 'required',
                'cost'          => 'required|numeric',
                'start'         => 'required',
                'end'           => 'required',
                'email'         => 'required|unique:users',
            ];
        }
    }
}
