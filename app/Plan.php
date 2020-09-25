<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Plan extends Model
{
    use Notifiable;
    protected $fillable=['name','date','month','category','Description'];
}
