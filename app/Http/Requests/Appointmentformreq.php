<?php

namespace App\Http\Requests;
use App\Http\Controllers\Appointmentcontroller;
use App\Models\AppointmentData;

use Illuminate\Foundation\Http\FormRequest;

class Appointmentformreq extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'Parentname' => ['required', 'string', 'max:255'],
            'Studentname' => ['required', 'string', 'max:255'],
            'studentage' => ['required', 'string', 'max:100'],
            'Address' => ['required', 'string', 'max:255'],
            'contactnum' => ['required', 'string', 'max:255'],
            'Email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:appointment'],
            'Date' => ['required', 'string', 'max:255','date'],
            'timeform' => ['required', 'string',],
            'assestmentform' => ['required', 'string',],
            'paymentform' => ['required', 'string',],
            

        ];

        
    }

    public function messages() {
        return[
            'Parentname.required' => 'The Parent field is required.',
            'Studentname.required' => 'The Student field is required.',
            'studentage.required' => 'The age field is required.',
            'Address.required' => 'The address field is required.',
            'contactnum.required' => 'The contact number field is required.',
            'Email.required' => 'The email field is required.',
            'Date.required' => 'The Date field is required.',
            'Email.email' => 'Please enter a valid email address.',
            'Email.unique' => 'This email address is already taken.',
            'Email.max' => 'The email field must not exceed 255 characters.',
            'timeform.required' => 'Time should not be left empty.',
            'assestmentform.required' => 'Assessment should not be left empty.',
            'paymentform.required' => 'Payment should not be left empty.',

        ];
    }
}
