<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Petugas extends Model
{
    use HasFactory;
    use Notifiable;
    use HasApiTokens;

    
    protected $guard   = 'petugas';
    protected $table   = 'petugas';
    protected $guarded = [];

    protected $hidden = ['password'];



   
    public function Tanggapan()
    {
        return $this->hasMany('App\Models\Tanggapan','id_pengaduan','id_petugas','id_petugas','id');
    }

}
