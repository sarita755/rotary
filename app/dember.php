<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class dember extends Model
{
    use Notifiable;
    protected $fillable=['title','Description','image','date','status'];
}

