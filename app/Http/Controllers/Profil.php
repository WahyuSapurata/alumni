<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumniRequest;
use App\Models\Alumni;
use App\Models\User;
use Illuminate\Http\Request;

class Profil extends BaseController
{
    public function index()
    {
        $module = 'Profil Alumni';
        $uuid = auth()->user()->uuid;
        $data_alumni = User::where('uuid', $uuid)->first();
        if ($data_alumni) {
            $data_alumni->alumni = Alumni::where('uuid_user', $data_alumni->uuid)->first();
        }
        return view('alumni.profil.index', compact('module', 'data_alumni'));
    }

    public function add_profil(StoreAlumniRequest $storeAlumniRequest)
    {
        $data = array();
        try {
            $data = $storeAlumniRequest->uuid_alumni ? Alumni::where('uuid', $storeAlumniRequest->uuid_alumni)->first() : new Alumni();
            $data->uuid_user = auth()->user()->uuid;
            $data->tanggal_lahir = $storeAlumniRequest->tanggal_lahir;
            $data->jenis_kelamin = $storeAlumniRequest->jenis_kelamin;
            $data->alamat = $storeAlumniRequest->alamat;
            $data->nomor_hp = $storeAlumniRequest->nomor_hp;
            $data->tahun_masuk = $storeAlumniRequest->tahun_masuk;
            $data->tahun_lulus = $storeAlumniRequest->tahun_lulus;
            $data->periode = $storeAlumniRequest->periode;
            $data->pekerjaan = $storeAlumniRequest->pekerjaan;
            $data->predikat = $storeAlumniRequest->predikat;
            $data->ipk = $storeAlumniRequest->ipk;
            $data->status = $storeAlumniRequest->input('status');

            if ($storeAlumniRequest->hasFile('foto')) {
                $file = $storeAlumniRequest->file('foto');
                $fileName = auth()->user()->name . '-foto-' . time() . '.' . $file->getClientOriginalExtension();
                $storeAlumniRequest->file('foto')->storeAs('profil', $fileName);
                $data->foto = $fileName;
            }

            if ($storeAlumniRequest->hasFile('ket_alumni')) {
                $file = $storeAlumniRequest->file('ket_alumni');
                $fileKet = auth()->user()->name . '-ket-' . time() . '.' . $file->getClientOriginalExtension();
                $storeAlumniRequest->file('ket_alumni')->storeAs('bukti', $fileKet);
                $data->ket_alumni = $fileKet;
            }

            $data->save();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Added data success');
    }
}
