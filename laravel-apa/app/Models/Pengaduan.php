<?php

namespace App\Models;

use App\Models\Tanggapan;
use App\Models\Masyarakat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table ='pengaduan';

    protected $primaryKey = 'id_pengaduan';
    protected $casts = [
        'tgl_pengaduan' => 'datetime',
      ];
    protected $fillable = [
        'nik',
         'tgl_pengaduan',
         'isi_laporan',
         'jenis_pengaduan',
         'foto',
         'status',
     ];

     public function masyarakat()
     {
         return $this->belongsTo(Masyarakat::class);
     }
    
     public function tanggapans()
     {
         return $this->hasMany(Tanggapan::class);
     }
}
