<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class pastprecouncil extends Model
{
    use Notifiable;
    protected $fillable=['ri_year','name','post','Designation','image1'];
}
