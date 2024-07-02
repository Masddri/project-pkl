<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kartu extends Model
{
    use HasFactory;

    public $fillable = ['nama_kartu', 'nomor', 'total'];
    public $visible = ['nama_kartu', 'nomor', 'total'];

    public function Wisata()
    {
        return $this->hasMany(Kartu::class, 'id_kartu');
    }
}
