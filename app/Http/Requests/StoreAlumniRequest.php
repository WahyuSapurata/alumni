<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlumniRequest extends FormRequest
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
            // 'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            // 'nomor_hp' => 'required',
            'tahun_masuk' => 'required',
            'tahun_lulus' => 'required',
            // 'periode' => 'required',
            // 'pekerjaan' => 'required',
            // 'predikat' => 'required',
            // 'ipk' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'tanggal_lahir.required' => 'Kolom tanggal lahir harus di isi.',
            'jenis_kelamin.required' => 'Kolom jenis kelamin harus di isi.',
            'alamat.required' => 'Kolom alamat harus di isi.',
            'nomor_hp.required' => 'Kolom nomor hanphone harus di isi.',
            'tahun_masuk.required' => 'Kolom tahun masuk harus di isi.',
            'tahun_lulus.required' => 'Kolom tahun lulus harus di isi.',
            'periode.required' => 'Kolom priode harus di isi.',
            'pekerjaan.required' => 'Kolom pekerjaan harus di isi.',
            'predikat.required' => 'Kolom predikat harus di isi.',
            'ipk.required' => 'Kolom ipk harus di isi.',
        ];
    }
}
