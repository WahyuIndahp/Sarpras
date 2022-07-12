<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembenahan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $dates = ['tgl_servis'];

    public function kondisis()
    {
        return $this->belongsTo(Kondisi::class, 'kondisi_id','id');
    }
}