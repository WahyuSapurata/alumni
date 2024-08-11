<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKesanPesanRequest;
use App\Http\Requests\UpdateKesanPesanRequest;
use App\Models\KesanPesan;
use App\Models\User;

class KesanPesanController extends BaseController
{
    public function index()
    {
        $module = 'Kesan Dan Pesan';
        $data = KesanPesan::where('uuid_user', auth()->user()->uuid)->first();
        return view('alumni.kesanpesan.index', compact('module', 'data'));
    }

    public function store(StoreKesanPesanRequest $storeKesanPesanRequest)
    {
        $data = array();
        try {
            $data = $storeKesanPesanRequest->uuid ? KesanPesan::where('uuid', $storeKesanPesanRequest->uuid)->first() : new KesanPesan();
            $data->uuid_user = auth()->user()->uuid;
            $data->kesan = $storeKesanPesanRequest->kesan;
            $data->pesan = $storeKesanPesanRequest->pesan;
            $data->save();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Added data success');
    }
}
