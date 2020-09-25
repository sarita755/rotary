<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class leadermessage extends Model
{
    use Notifiable;
    protected $fillable=['id','date','post','name','image','Message'];
}
