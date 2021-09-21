<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    protected $table = 'pengaduan';
    protected $guarded = [];

    public function Tanggapan()
    {
        return $this->hasOne('App\Models\Tanggapan','id_pengaduan','id');
    }

    public function Masyarakat()
    {
        return $this->belongsTo('App\Models\Masyarakat','id_masyarakat','id');
        
    }
}
