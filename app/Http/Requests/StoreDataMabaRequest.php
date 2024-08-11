<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDataMabaRequest extends FormRequest
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
            'fakultas' => 'required',
            'tahun_masuk' => 'required',
            'jumlah_l' => 'required',
            'jumlah_p' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'fakultas.required' => 'Kolom fakultas harus di isi.',
            'tahun_masuk.required' => 'Kolom tahun masuk harus di isi.',
            'jumlah_l.required' => 'Kolom jumlah laki-laki harus di isi.',
            'jumlah_p.required' => 'Kolom jumlah perempuan harus di isi.',
        ];
    }
}
