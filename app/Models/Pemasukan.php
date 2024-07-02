<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    use HasFactory;

    public $fillable = ['jumlah_pemasukan', 'deskripsi', 'id_kartu'];
    public $visible = ['jumlah_pemasukan', 'deskripsi', 'id_kartu'];

    public function Kartu()
    {
        return $this->belongsTo(Kartu::class, 'id_kartu');
    }
}
