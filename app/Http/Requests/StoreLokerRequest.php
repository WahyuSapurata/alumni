<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLokerRequest extends FormRequest
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
            'nama_loker' => 'required',
            'lokasi' => 'required',
            'perusahaan' => 'required',
            'link' => 'required',
            'deskripsi' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama_loker.required' => 'Kolom nama loker harus di isi.',
            'lokasi.required' => 'Kolom lokasi harus di isi.',
            'perusahaan.required' => 'Kolom perusahaan harus di isi.',
            'link.required' => 'Kolom link harus di isi.',
            'deskripsi.required' => 'Kolom deskripsi harus di isi.',
        ];
    }
}
