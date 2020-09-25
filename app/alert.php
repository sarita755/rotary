<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class alert extends Model
{
    use Notifiable;
    protected $fillable=['name'];
}

