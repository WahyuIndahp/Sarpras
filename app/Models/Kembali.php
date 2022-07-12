<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kembali extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $dates = ['tgl_kembali'];

    public function pinjams()
    {
        return $this->belongsTo(Pinjam::class, 'pinjam_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'pinjam_id', 'id');
    }

    public function sarprases()
    {
        return $this->belongsTo(Sarprase::class, 'sarpras_id','id');
    }
    
}