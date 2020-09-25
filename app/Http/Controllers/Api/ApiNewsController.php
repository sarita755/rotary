<?php

namespace App\Http\Controllers\Api;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiNewsController extends Controller
{
    public function news(){
    	$News = News::all();
    	return $News;

    }
}
