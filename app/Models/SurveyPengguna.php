<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class SurveyPengguna extends Model
{
    use HasFactory;

    protected $table = 'survey_penggunas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        'nama_pengisi',
        'jenis_kelamin',
        'no_hp',
        'email',
        'jurusan',
        'tahun_lulus',
        'status_pekerjaan',
        'kepuasan_pendidikan',
        'kepuasan_fasilitas',
        'harapan',
        'saran',
    ];

    protected static function boot()
    {
        parent::boot();

        // Event listener untuk membuat UUID sebelum menyimpan
        static::creating(function ($model) {
            $model->uuid = Uuid::uuid4()->toString();
        });
    }
}
