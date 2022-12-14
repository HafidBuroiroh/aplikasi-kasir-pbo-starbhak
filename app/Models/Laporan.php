<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = "laporans";
    protected $fillable = [
        'laporan_transaksi','daftar_menu_id','laporan_pendapatan_harian'
    ];

    public function laporan(){
        return $this->belongsTo(Menu::class, 'daftar_menu_id');
    }
}
