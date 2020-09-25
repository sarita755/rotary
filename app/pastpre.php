<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class pastpre extends Model
{
    use Notifiable;
        protected $fillable=['ri_year','pre_name','sec_name','image1','image2','image3'];
}
