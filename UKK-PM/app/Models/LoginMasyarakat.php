<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginMasyarakat extends User
{
    use HasFactory;
    protected $table = 'masyarakat';
    protected $hidden = ['password'];


}
