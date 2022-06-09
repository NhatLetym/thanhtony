<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donban extends Model
{
    use HasFactory;
    protected $table = 'hoadonxuat';
    public function Nhanvien()
    {
        return $this->belongsTo(Nhanvien::class, 'ma_nv');
    }
}
