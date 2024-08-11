<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSurveyPenggunaRequest extends FormRequest
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
            'nama_pengisi' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'jurusan' => 'required',
            'tahun_lulus' => 'required',
            'status_pekerjaan' => 'required',
            'kepuasan_pendidikan' => 'required',
            'kepuasan_fasilitas' => 'required',
            'harapan' => 'required',
            'saran' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama_pengisi.required' => 'Kolom nama pengisi harus di isi.',
            'jenis_kelamin.required' => 'Kolom jenis kelamin harus di isi.',
            'no_hp.required' => 'Kolom no hp harus di isi.',
            'email.required' => 'Kolom email harus di isi.',
            'jurusan.required' => 'Kolom jurusan harus di isi.',
            'tahun_lulus.required' => 'Kolom tahun lulus harus di isi.',
            'status_pekerjaan.required' => 'Kolom status pekerjaan harus di isi.',
            'kepuasan_pendidikan.required' => 'Kolom kepuasan pendidikan harus di isi.',
            'kepuasan_fasilitas.required' => 'Kolom kepuasan fasilitas harus di isi.',
            'harapan.required' => 'Kolom harapan harus di isi.',
            'saran.required' => 'Kolom saran harus di isi.',
        ];
    }
}
