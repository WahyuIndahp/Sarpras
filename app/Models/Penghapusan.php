<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghapusan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $dates = ['tgl_hps'];
}
