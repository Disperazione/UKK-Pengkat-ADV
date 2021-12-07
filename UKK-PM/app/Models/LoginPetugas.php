<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class LoginPetugas extends User
{
    use HasFactory;
    use HasApiTokens;
    protected $guard   = 'petugas';
    protected $table   = 'petugas';
    protected $guarded = [];

    protected $hidden = ['password'];



}

