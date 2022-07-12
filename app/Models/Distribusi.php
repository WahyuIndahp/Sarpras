<?php

namespace App\Models;

use App\Models\Ruang;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribusi extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    protected $dates = ['tgl_terima'];

    public function ruangs()
    {
        return $this->belongsTo(Ruang::class, 'ruang_id','id');
    }

}