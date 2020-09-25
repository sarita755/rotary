<?php

namespace App\Http\Controllers\Api;

use App\dember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiNotificationController extends Controller
{
    public function notice(){
    	$notice = dember::all();
    	return $notice;

    }
}
