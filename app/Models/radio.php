<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class radio extends Model
{
    protected $table = "radios";
    protected $primarykey ="id";
    protected $fillable = ['id','radio','alamat'];
}