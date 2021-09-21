<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginPetugas extends User
{
    use HasFactory;
    protected $table = 'petugas';
    protected $hidden = ['password'];
    


}

