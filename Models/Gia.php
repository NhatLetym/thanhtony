<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gia extends Model
{
    use HasFactory;
    protected $table = 'gia';
    public function Sanpham()
    {
        return $this->belongsTo(Sanpham::class, 'ma_sanpham');
    }
}
