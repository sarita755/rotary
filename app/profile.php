<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class profile extends Model
{
    use Notifiable;
    protected $fillable=['id','title','type','image','url','Details'];
}
