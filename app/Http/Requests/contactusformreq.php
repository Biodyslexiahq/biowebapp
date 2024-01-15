<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contactusformreq extends FormRequest
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
            'contact_email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'contact_nom' => ['required','string'],
            'contact_sujet' => ['required','string'],
            'contact_message' => ['required','string'],
        ];
    }


    public function messages() {
        return[
            'contact_email.required' => 'The email field should not be empty.',
            'contact_nom.required' => 'The name field should not be empty.',
            'contact_sujet.required' => 'The subject field should not be empty.',
            'contact_message.required' => 'The message field should not be empty.',
            'contact_email.max' => 'The email field must not exceed 255 characters.',
        ];
    }
}
