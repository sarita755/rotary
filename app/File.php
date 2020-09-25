<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class File extends Model
{
    use Notifiable;
    protected $fillable=['name','file','protype','date','Description'];
}
