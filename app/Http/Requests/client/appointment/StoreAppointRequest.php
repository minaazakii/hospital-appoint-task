<?php

namespace App\Http\Requests\client\appointment;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppointRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'speciality_id'=>'required',
            'date'=>'required|date|after:'.date('Y-m-d'),
            'time'=>'required'

        ];

    }

    public function messages()
    {
        return[
            'speciality_id.required'=>'Speciality is Required',
        ];

    }
}
