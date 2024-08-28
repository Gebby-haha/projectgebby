<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;
    protected $table='berita';
    protected $fillable=['judul_artikel', 'isi_artikel', 'kategori_id', 'gambar','tanggal', 'status', 'created_at', 'updated_at'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
