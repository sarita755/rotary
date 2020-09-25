<?php

namespace App\Http\Controllers\Api;

use App\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiFileController extends Controller
{
    public function File(){
    	$file = File::all();
    	return $file;

    }
}
