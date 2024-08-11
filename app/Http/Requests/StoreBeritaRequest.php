<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBeritaRequest extends FormRequest
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
            'judul_berita' => 'required',
            'isi_berita' => 'required',
            'penulis' => 'required',
            'sumber' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'judul_berita.required' => 'Kolom judul harus di isi.',
            'isi_berita.required' => 'Kolom isi berita harus di isi.',
            'penulis.required' => 'Kolom penulis harus di isi.',
            'sumber.required' => 'Kolom sumber harus di isi.',
        ];
    }
}
