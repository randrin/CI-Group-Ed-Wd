<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'contact_name'    => 'required|min:5|max:100',
            'contact_phone'    => 'required|min:7|max:15',
            'contact_email'   => 'required|email',
            'contact_subject' => 'required|min:10|max:200',
            'contact_message'     => 'required|min:10|max:50000',
        ];
    }
}
