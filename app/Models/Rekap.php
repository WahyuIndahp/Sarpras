<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekap extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function sarprases()
    {
        return $this->belongsTo(Sarprase::class, 'sarpras_id','id');
    }
}