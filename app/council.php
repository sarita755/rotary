<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class council extends Model
{
    use Notifiable;
    protected $fillable=['id','year','post','name','Designation','image'];
}
