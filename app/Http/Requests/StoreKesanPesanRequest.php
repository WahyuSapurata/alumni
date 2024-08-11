<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKesanPesanRequest extends FormRequest
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
            'kesan' => 'required',
            'pesan' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'kesan.required' => 'Kolom kesan harus di isi.',
            'pesan.required' => 'Kolom pesan harus di isi.',
        ];
    }
}
