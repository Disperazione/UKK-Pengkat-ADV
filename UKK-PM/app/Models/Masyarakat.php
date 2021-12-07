<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Masyarakat extends Authenticable
{
    use HasFactory;
    use Notifiable;
    use HasApiTokens;

    protected $table = 'masyarakat';
    protected $guard = 'Masyarakat';
    protected $guarded = [];

    public function Pengaduan()
    {
        return $this->hasMany('App\Models\Pengaduan','id_masyarakat','id');
    }


    

}
