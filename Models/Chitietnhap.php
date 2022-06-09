<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chitietnhap extends Model
{
    use HasFactory;
    protected $table = 'cthoadonnhap';
    public function Hoadonnhap()
    {
        return $this->belongsTo(Donnhap::class, 'ma_hoadon');
    }
    public function Sanpham()
    {
        return $this->belongsTo(Sanpham::class, 'ma_sanpham');
    }
}
