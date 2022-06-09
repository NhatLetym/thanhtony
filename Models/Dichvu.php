<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dichvu extends Model
{
    use HasFactory;
    protected $table = 'dichvu';
    public function Loaidv()
    {
        return $this->belongsTo(Loaidichvu::class, 'maloaidichvu');
    }
}
