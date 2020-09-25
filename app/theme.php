<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class theme extends Model
{
    use Notifiable;
    protected $fillable=['id','date','title','image','image1','Description'];
}
