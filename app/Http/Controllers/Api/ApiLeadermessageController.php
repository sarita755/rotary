<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiLeadermessageController extends Controller
{
    public function leadermessage(){
    	$leadermessages = leadermessage::all();
        return $leadermessages;
    }
}
