<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Tanggapan extends Model
{
    use HasFactory;

    protected $table = 'tanggapan';
    protected $guarded = [];



    public function Petugas()
    {
        return $this->belongsTo('App\Models\Petugas','id_petugas','id');
    }
    public function Pengaduan()
    {
        return $this->belongsTo('App\Models\Pengaduan','id_pengaduan','id');
        
    }
}
