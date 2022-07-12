<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qrcode extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function inventories()
    {
        return $this->belongsTo(Inventory::class, 'inventaris_id','id');
    }
}
