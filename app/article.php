<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class article extends Model
{
    use Notifiable;
    protected $fillable=['id','title','Description','image','date','type'];
}
