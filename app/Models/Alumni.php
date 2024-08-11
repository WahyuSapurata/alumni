<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'alumnis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        'uuid_user',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'nomor_hp',
        'tahun_masuk',
        'tahun_lulus',
        'periode',
        'pekerjaan',
        'predikat',
        'ipk',
        'status',
        'foto',
        'ket_alumni',
    ];

    protected $casts = [
        'status' => 'array',
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
