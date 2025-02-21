<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => ['required', 'string', 'regex:/^[a-zA-ZÀ-ÿ]+( [a-zA-ZÀ-ÿ]+)+$/'],
            "email" => "required|email|unique:contacts,email",
            "phone" => "required|string|min:10"
        ];
    }
}
