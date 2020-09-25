<?php

namespace App\Http\Controllers\Api;

use App\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiFaqController extends Controller
{
    public function faq(){
    	$Faq = Faq::all();
    	return $Faq;

    }
}
