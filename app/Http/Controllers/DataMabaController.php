<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDataMabaRequest;
use App\Http\Requests\UpdateDataMabaRequest;
use App\Models\DataMaba;

class DataMabaController extends BaseController
{
    public function index()
    {
        $module = 'Data Maba';
        return view('admin.maba.index', compact('module'));
    }

    public function get()
    {
        // Mengambil semua data pengguna
        $dataFull = DataMaba::all();

        // Mengembalikan response berdasarkan data yang sudah disaring
        return $this->sendResponse($dataFull, 'Get data success');
    }

    public function store(StoreDataMabaRequest $storeDataMabaRequest)
    {
        $data = array();
        try {
            $data = new DataMaba();
            $data->fakultas = $storeDataMabaRequest->fakultas;
            $data->tahun_masuk = $storeDataMabaRequest->tahun_masuk;
            $data->jumlah_l = $storeDataMabaRequest->jumlah_l;
            $data->jumlah_p = $storeDataMabaRequest->jumlah_p;
            $data->save();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Added data success');
    }

    public function show($params)
    {
        $data = array();
        try {
            $data = DataMaba::where('uuid', $params)->first();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Show data success');
    }

    public function update(StoreDataMabaRequest $storeDataMabaRequest, $params)
    {
        try {
            $data = DataMaba::where('uuid', $params)->first();
            $data->fakultas = $storeDataMabaRequest->fakultas;
            $data->tahun_masuk = $storeDataMabaRequest->tahun_masuk;
            $data->jumlah_l = $storeDataMabaRequest->jumlah_l;
            $data->jumlah_p = $storeDataMabaRequest->jumlah_p;
            $data->save();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }

        return $this->sendResponse($data, 'Update data success');
    }

    public function delete($params)
    {
        $data = array();
        try {
            $data = DataMaba::where('uuid', $params)->first();
            $data->delete();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Delete data success');
    }
}
