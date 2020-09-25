<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Setting extends Model
{
    use Notifiable;
    protected $fillable=['pro_category','business_category'];
}
