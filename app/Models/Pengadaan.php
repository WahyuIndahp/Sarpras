<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengadaan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $dates = ['tgl_beli'];

    public function sarprases()
    {
        return $this->belongsTo(Sarprase::class, 'sarpras_id','id');
    }
}