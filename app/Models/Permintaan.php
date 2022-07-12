<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $dates = ['tgl_minta'];

    public function ruangs()
    {
        return $this->belongsTo(Ruang::class, 'ruang_id','id');
        
    }

    public function sarprases()
    {
        return $this->belongsTo(Sarprase::class, 'sarpras_id','id');
    }
}