<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class project extends Model
{
    use Notifiable;
    protected $fillable=['id','date','name','image','Description'];
}
