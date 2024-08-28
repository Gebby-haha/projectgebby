<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikelkategori extends Model
{
    use HasFactory;
    protected $table='artikelkategori';
    protected $fillable=['artikel_id', 'kategori_id'];
}
