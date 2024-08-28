<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Berita;

class kategori extends Model
{
    use HasFactory;
    protected $table='kategori';

    protected $guarded=[];

    public function beritas()
    {
        return $this->hasMany(Berita::class, 'kategori_id');
    }
}
