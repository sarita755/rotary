<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class resource extends Model
{
    use Notifiable;
    protected $fillable=['id','date','title','type','file'];
}
