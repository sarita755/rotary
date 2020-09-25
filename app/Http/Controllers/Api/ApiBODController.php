<?php

namespace App\Http\Controllers\Api;

use App\BOD;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiBODController extends Controller
{
    public function BOD(){
    	$bod = BOD::all();
    	return $bod;

    }
}
