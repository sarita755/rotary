<?php

namespace App\Http\Controllers;

use App\leadermessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SingleMessageController extends Controller
{
    public function ViewMessage($id){
        $leadermessage=leadermessage::find($id);
        return view('front.pages.singlemessage',compact('leadermessage'));
     }
}
