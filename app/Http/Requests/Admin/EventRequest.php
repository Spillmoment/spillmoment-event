<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        if (request()->isMethod('post')) {
            $photo = 'required|image|mimes:jpeg,jpg,png,bmp';
        } elseif (request()->isMethod('put')) {
            $photo = 'sometimes|nullable|image|mimes:jpeg,jpg,png,bmp';
        }

        return [
            'event_category_id' => 'required',
            'speaker_id' => 'required',
            'partner_id' => 'required',
            'title' => 'required|max:255',
            'body' => 'required',
            'photo' => $photo,
            'price' => 'nullable|integer',
            'link' => 'required',
            'quota' => 'required|integer',
            'type' => 'required|in:paid,free',
            'status' => 'required|in:online,offline',
            'place' => 'required',
            'event_date' => 'required|date',
            'start_time' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'event_category_id.required' => 'Event kategori wajib diisi',
            'speaker_id.required' => 'Speaker wajib diisi',
            'partner_id.required' => 'Partner wajib diisi',
            'title.required' => 'Nama event wajib diisi',
            'body.required' => 'Deskripsi wajib diisi',
            'photo.required' => 'Foto wajib diisi',
            'link.required' => 'Link wajib diisi',
            'quota.required' => 'Kuota wajib diisi',
            'place.required' => 'Tempat wajib diisi',
            'event_date.required' => 'Tanggal event wajib diisi',
            'start_time.required' => 'Waktu mulai wajib diisi',
        ];
    }
}
