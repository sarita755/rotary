<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class About extends Model
{
    use Notifiable;
        protected $fillable=['title','name','Description','image',];
}
