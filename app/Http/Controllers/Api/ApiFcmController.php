<?php

namespace App\Http\Controllers\Api;

use App\member;
use App\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiFcmController extends Controller
{
    public function fetchMembers(){

        
        $data1 = member::select("name as display",'id as value')->get();
            
        return $data1;
            
    }
    
 public function fcmMessage(Request $request){
    
    $body = $request->body;
    $title = $request->title;
    $sender = $request->sender;
    
    $message = Message::create([
        'message' => $body,
        'title' => $title,
        'name' => $sender,
        'date' => date('Y-m-d')
    ]);
    
    if($message->save()){
        $path_to_fcm="https://fcm.googleapis.com/fcm/send";
        $server_key="AAAA5m1tuuM:APA91bE5DFwegqFcFFKXIctIbaLS6wDWtN99Wcf225WjnqH9H0YaxsB-8RZQ-_fktUhUO99H18Lbei8158mPg0yYjQl8Doi626EuHASPbFZFC4OZ9tMzHbVwCTwfgRoxE-vXU8M-QIix";
        
        $ids = json_decode($request->ids,true);
        
        $id = $request->ids;
        
        if($id == "[all]"){
            
            $keys = member::where("Degination","Member")->select("device_id")->get();
        } else if($id == "[board]"){
                    $keys = member::where("Degination", "!=","Member")->select("device_id")->get();
    
        } else {
                $keys = member::whereIn('id',$ids)->select("device_id")->get();
    
        }
        
        $deviceIds = [];
          
        
        for($i = 0 ; $i < count($keys) ; $i++ ){
            if($keys[$i]['device_id'] != null){
                $deviceIds[] = $keys[$i]['device_id'];
            }
            }
            
        $headers=array(
              'Authorization:key='.$server_key,
        	   'Content-Type:application/json'
        	   );
        	   
        $fields=array('registration_ids'=>$deviceIds,
        
                        'notification'=>array('title'=>$request->title,'body'=>$request->body));	   
        $payload=json_encode($fields);
        
        $curl_session=curl_init();
        curl_setopt($curl_session, CURLOPT_URL, $path_to_fcm);
        curl_setopt($curl_session, CURLOPT_POST, true);
        curl_setopt($curl_session, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl_session, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl_session, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl_session, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        curl_setopt($curl_session, CURLOPT_POSTFIELDS, $payload);
        
        $result=curl_exec($curl_session);
        
    
        return $deviceIds;
        
        curl_close($curl_session);
        
        
        
        }
    }
    
    public function fetchMessage(){
        $message = Message::orderBy('id', 'desc')->get();
        return $message;
    }
}