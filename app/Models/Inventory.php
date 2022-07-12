<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $dates = ['tgl_terima'];
    
    public function sarprases()
    {
        return $this->belongsTo(Sarprase::class, 'sarpras_id','id');
    }
}