<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class organization extends Model
{
    use Notifiable;
        protected $fillable=['established_year','org_name','org_type','pre_name','pre_contact','image','sec_name','sec_contact','image1'];
}
