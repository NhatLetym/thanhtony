<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donnhap extends Model
{
    use HasFactory;
    protected $table = 'hoadonnhap';
    public function Nhacungcap()
    {
        return $this->belongsTo(Nhanvien::class, 'ma_ncc');
    }
}
