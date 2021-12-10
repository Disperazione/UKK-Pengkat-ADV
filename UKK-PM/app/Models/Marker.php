<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Marker extends Model
{
    use HasFactory;
    use Notifiable;
    protected $guard   = 'markers';
    protected $table   = 'markers';
    protected $guarded = [];

    protected $hidden = ['password'];

}
