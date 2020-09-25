<?php

namespace App\Http\Controllers\Api;

use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiMessageController extends Controller
{
    public function message(){
    	$message = Message::all();
    	return $message;

    }
    
    public function messagestore(Request $request){
    	$message = Message::create([
    	    'title' => $request->title,
    	    'name' => $request->sender,
    	    'message' => $request->message,
    	    'date' => date('Y-m-d')
    	]);
    	
    	if($message->save()){
    	    return response(200);
    	}
    }
}
