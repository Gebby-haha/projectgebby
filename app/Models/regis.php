<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class regis extends Model
{
    use HasFactory;
    protected $table='regis';
    protected $fillable=['nama','email','username','password', 'confirm_password', 'jenis_kelamin', 'updated_at', 'created_at'];
}
