<?php

namespace App\Http\Controllers\Api;

use App\pre_council;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiCouncilController extends Controller
{
    public function council(){
    	$council = pre_council::all();
    	return $council;

    }
}
