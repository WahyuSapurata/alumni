<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use App\Models\Berita;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class BeritaController extends BaseController
{
    public function index()
    {
        $module = 'Data Berita';
        return view('admin.berita.index', compact('module'));
    }

    public function add()
    {
        $module = 'Tambah Berita';
        return view('admin.berita.tambah', compact('module'));
    }

    public function edit($params)
    {
        $module = 'Edit Berita';
        $this->show($params);
        return view('admin.berita.edit', compact('module'));
    }

    public function get()
    {
        // Mengambil semua data pengguna
        $dataFull = Berita::all();

        // Mengembalikan response berdasarkan data yang sudah disaring
        return $this->sendResponse($dataFull, 'Get data success');
    }

    public function store(StoreBeritaRequest $storeBeritaRequest)
    {
        $data = array();
        $tanggalPeminjaman = Carbon::now();

        $newGambar = '';
        if ($storeBeritaRequest->file('foto')) {
            $extension = $storeBeritaRequest->file('foto')->extension();
            $newGambar = $storeBeritaRequest->penulis . '-' . now()->timestamp . '.' . $extension;
            $storeBeritaRequest->file('foto')->storeAs('berita', $newGambar);
        }

        try {
            $data = new Berita();
            $data->judul_berita = $storeBeritaRequest->judul_berita;
            $data->isi_berita = $storeBeritaRequest->isi_berita;
            $data->tanggal_publikasi = $tanggalPeminjaman->format('d-m-Y');
            $data->penulis = $storeBeritaRequest->penulis;
            $data->sumber = $storeBeritaRequest->sumber;
            $data->gambar = $newGambar;
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
            $data = Berita::where('uuid', $params)->first();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Show data success');
    }

    public function update(StoreBeritaRequest $storeBeritaRequest, $params)
    {
        $data = Berita::where('uuid', $params)->first();
        if (!$data) {
            return $this->sendError('Berita not found', 'Berita not found', 404);
        }

        $oldFotoPath = public_path('berita/' . $data->gambar);

        // Validasi dan simpan foto baru
        $newGambar = '';
        if ($storeBeritaRequest->hasFile('gambar')) {
            $extension = $storeBeritaRequest->file('gambar')->extension();
            $newGambar = $storeBeritaRequest->penulis . '-' . now()->timestamp . '.' . $extension;
            $storeBeritaRequest->file('gambar')->storeAs('berita', $newGambar);

            // Hapus gambar lama jika ada
            if (File::exists($oldFotoPath)) {
                File::delete($oldFotoPath);
            }
        }

        try {
            $data->judul_berita = $storeBeritaRequest->judul_berita;
            $data->isi_berita = $storeBeritaRequest->isi_berita;
            $data->penulis = $storeBeritaRequest->penulis;
            $data->sumber = $storeBeritaRequest->sumber;
            $data->gambar = $storeBeritaRequest->file('gambar') ? $newGambar : $data->gambar;
            $data->save();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), 'Failed to update data', 400);
        }

        return $this->sendResponse($data, 'Update data success');
    }

    public function delete($params)
    {
        $data = array();
        try {
            $data = Berita::where('uuid', $params)->first();
            // Simpan nama foto lama untuk dihapus
            $oldFotoPath = public_path('berita/' . $data->gambar);
            // Hapus foto lama jika ada
            if (File::exists($oldFotoPath)) {
                File::delete($oldFotoPath);
            }
            $data->delete();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Delete data success');
    }
}
