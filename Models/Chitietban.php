<?php

namespace App\Models;

use App\Http\Controllers\sanphamcontroller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chitietban extends Model
{
    use HasFactory;
    protected $table = 'cthoadonxuat';
    public function Hoadonxuat()
    {
        return $this->belongsTo(Donban::class, 'ma_hoadon');
    }
    public function Sanpham()
    {
        return $this->belongsTo(Sanpham::class, 'ma_sanpham');
    }
}
