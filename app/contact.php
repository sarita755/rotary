<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class contact extends Model
{
    use Notifiable;
    protected $fillable=['id','name','email','Message'];
}
