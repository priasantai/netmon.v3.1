<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class serverM extends Model
{
    protected $table = "servers";
    protected $primarykey ="id";
    protected $fillable = ['id','vm','alamat'];
}