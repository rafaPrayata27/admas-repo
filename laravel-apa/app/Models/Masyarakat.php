<?php

namespace App\Models;

use App\Models\Pengaduan;
use App\Models\RatingApp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Masyarakat extends  Authenticatable
{
    use HasFactory;

    protected $table ='masyarakat';

    protected $primaryKey = 'nik';

    protected $fillable = [
        'nik',
        'nama',
        'username',
      'password',
      'telp',
      'foto',
     ];

     public function pengaduans()
     {
         return $this->hasMany(Pengaduan::class);
     }
    
     public function ratings()
     {
         return $this->hasMany(RatingApp::class);
     }

}
