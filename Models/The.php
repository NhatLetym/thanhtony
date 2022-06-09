<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class The extends Model
{
    use HasFactory;
    protected $table = 'the';
    public function Khachhang()
    {
        return $this->belongsTo(Khachhang::class, 'ma_khachhang');
    }
}
