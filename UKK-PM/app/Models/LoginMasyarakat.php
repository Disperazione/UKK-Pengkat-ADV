<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class LoginMasyarakat extends User
{
    use HasFactory;
    use HasApiTokens;

    protected $table = 'masyarakat';
    protected $guard = 'Masyarakat';
    protected $guarded = [];
    
}
