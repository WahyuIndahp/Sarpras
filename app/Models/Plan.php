<?php

namespace App\Models;

use App\Models\Ruang;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function ruangs()
    {
        return $this->belongsTo(Ruang::class, 'ruang_id','id');
    }
}
