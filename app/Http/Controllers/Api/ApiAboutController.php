<?php

namespace App\Http\Controllers\Api;

use App\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiAboutController extends Controller
{
    public function about(){
    	$abouts = About::all();
    	return $abouts;

    }
}
