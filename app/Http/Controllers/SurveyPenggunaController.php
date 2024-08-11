<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSurveyPenggunaRequest;
use App\Http\Requests\UpdateSurveyPenggunaRequest;
use App\Models\SurveyPengguna;

class SurveyPenggunaController extends BaseController
{
    public function index()
    {
        $module = 'Survey Pengguana';
        return view('admin.survey.index', compact('module'));
    }

    public function get()
    {
        $data = SurveyPengguna::all();
        return $this->sendResponse($data, 'Get data success');
    }

    public function store(StoreSurveyPenggunaRequest $storeSurveyPenggunaRequest)
    {
        $data = array();
        try {
            $data = new SurveyPengguna();
            $data->nama_pengisi = $storeSurveyPenggunaRequest->nama_pengisi;
            $data->jenis_kelamin = $storeSurveyPenggunaRequest->jenis_kelamin;
            $data->no_hp = $storeSurveyPenggunaRequest->no_hp;
            $data->email = $storeSurveyPenggunaRequest->email;
            $data->jurusan = $storeSurveyPenggunaRequest->jurusan;
            $data->tahun_lulus = $storeSurveyPenggunaRequest->tahun_lulus;
            $data->status_pekerjaan = $storeSurveyPenggunaRequest->status_pekerjaan;
            $data->kepuasan_pendidikan = $storeSurveyPenggunaRequest->kepuasan_pendidikan;
            $data->kepuasan_fasilitas = $storeSurveyPenggunaRequest->kepuasan_fasilitas;
            $data->harapan = $storeSurveyPenggunaRequest->harapan;
            $data->saran = $storeSurveyPenggunaRequest->saran;
            $data->save();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Added data success');
    }
}
