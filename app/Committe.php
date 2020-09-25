<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Committe extends Model
{
    use Notifiable;
    protected $fillable=['id','date','title','chairperson','image','Description'];
}
