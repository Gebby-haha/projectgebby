<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formulir extends Model
{
    use HasFactory;
    protected $table='formulir';
    protected $fillable=['nama','jurusan','alamat','jenis_kelamin', 'image'];
}
