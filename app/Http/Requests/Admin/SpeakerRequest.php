<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SpeakerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        if (request()->isMethod('post')) {
            $email = 'required|email|unique:speakers';
            $phone = 'required|unique:speakers';
            $photo = 'required|image|mimes:jpeg,jpg,png,bmp';
        } elseif (request()->isMethod('put')) {
            $email = 'required|email|unique:speakers,email,' . $this->speaker->id;
            $phone = 'required|unique:speakers,phone,' . $this->speaker->id;
            $photo = 'sometimes|nullable|image|mimes:jpeg,jpg,png,bmp';
        }

        return [
            'name' => 'required|string',
            'email' => $email,
            'phone' => $phone,
            'photo' => $photo,
            'address' => 'required',
            'competence' => 'required',
            'position' => 'required'
        ];
    }
}
