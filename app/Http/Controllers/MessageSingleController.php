<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageSingleController extends Controller
{
    public function ViewMessage($id){
        $message=message::find($id);
        return view('front.pages.messagesingle',compact('message'));
     }
}
