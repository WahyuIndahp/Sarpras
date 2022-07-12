<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $dates = ['tgl_pinjam'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id','id' );
    }

    public function sarprases()
    {
        return $this->belongsTo(Sarprase::class, 'sarpras_id','id');
    }
}