<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datlich extends Model
{
    use HasFactory;
    protected $table = 'datlich';
    public function Dichvu()
    {
        return $this->belongsTo(Dichvu::class, 'ma_dichvu');
    }
}
