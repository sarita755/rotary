<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class member extends Model
{
    use Notifiable;
    protected $fillable=['image','image1','email','phone','Work','Degination','Blood_group','Mobile','Spouse','Ri_id','name','address','date','anniversary','martial_status'];
}

