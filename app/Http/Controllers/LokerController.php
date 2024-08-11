<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLokerRequest;
use App\Http\Requests\UpdateLokerRequest;
use App\Models\Loker;

class LokerController extends BaseController
{
    public function index()
    {
        $module = 'Data Loker';
        return view('admin.loker.index', compact('module'));
    }

    public function get()
    {
        // Mengambil semua data pengguna
        $dataFull = Loker::all();

        // Mengembalikan response berdasarkan data yang sudah disaring
        return $this->sendResponse($dataFull, 'Get data success');
    }

    public function store(StoreLokerRequest $storeLokerRequest)
    {
        $data = array();
        try {
            $data = new Loker();
            $data->nama_loker = $storeLokerRequest->nama_loker;
            $data->lokasi = $storeLokerRequest->lokasi;
            $data->perusahaan = $storeLokerRequest->perusahaan;
            $data->link = $storeLokerRequest->link;
            $data->deskripsi = $storeLokerRequest->deskripsi;
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
            $data = Loker::where('uuid', $params)->first();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Show data success');
    }

    public function update(StoreLokerRequest $storeLokerRequest, $params)
    {
        try {
            $data = Loker::where('uuid', $params)->first();
            $data->nama_loker = $storeLokerRequest->nama_loker;
            $data->lokasi = $storeLokerRequest->lokasi;
            $data->perusahaan = $storeLokerRequest->perusahaan;
            $data->link = $storeLokerRequest->link;
            $data->deskripsi = $storeLokerRequest->deskripsi;
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
            $data = Loker::where('uuid', $params)->first();
            $data->delete();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Delete data success');
    }
}
