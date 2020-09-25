<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class media extends Model
{
    use Notifiable;
    protected $fillable=['title','image','date','mediatype','Description'];
}
