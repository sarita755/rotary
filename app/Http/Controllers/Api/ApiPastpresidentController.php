<?php

namespace App\Http\Controllers\Api;

use App\pastpre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiPastpresidentController extends Controller
{
    public function past(){
    	$past = pastpre::all();
    	return $past;

    }
}
