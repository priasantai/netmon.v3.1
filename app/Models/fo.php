<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fo extends Model
{
    protected $table = "fos";
    protected $primarykey ="id";
    protected $fillable = ['id','ont','alamat'];
}
