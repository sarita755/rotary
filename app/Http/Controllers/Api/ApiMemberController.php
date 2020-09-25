<?php

namespace App\Http\Controllers\Api;

use App\member;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ApiMemberController extends Controller
{
    public function memberlogin(Request $request){
        $otp = rand(100000,999999);
        $getMember = member::whereMobile($request->number)->get();
        if($getMember->isEmpty()){
            return response(404);
        }
        else{
            $member = member::whereMobile($request->number)->update(['otp' => $otp]);
            function sendSMS($content)
            {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "http://bulksms.nctbutwal.com.np/api/v3/sms?");
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $server_output = curl_exec($ch);
                curl_close($ch);
                return $server_output;
            }
            $token = 'ntgq645ibWnRYNcE974JVBtBFhmfgx2g8yS';
            $to = $request->number;
            $sender = "RCCB";
            $message = 'Your OTP code is : '.$otp;
    
            // set post fields
            $content = [
                'token' => rawurlencode($token),
                'to' => rawurlencode($to),
                'sender' => rawurlencode($sender),
                'message' => wordwrap($message),
            ];
    
            $thesmscentral_response = sendSMS($content);
            return $otp;
        }
    }
    
    public function checkotp(Request $request){
    	$member = member::whereOtp($request->otp)->get();
    	return $member;
    }
    
    public function createpassword(Request $request){
        $id = $request->id;
        $password = $request->password;
        $member = member::find($id);
        $member->password = bcrypt($password);
        $member->device_id = $request->deviceId;
        $member->update();
        if($member->update()){
            return response(200);
        }
        else{
            return response(404);
        }
    }
    
    public function finallogin(Request $request){
        $phone_no = $request->number;
        $memberpassword = member::whereMobile($phone_no)->first();
        if(!$memberpassword){
            return response(404);
        }
        else{
            if (Hash::check($request->password, $memberpassword->password)) {
                $updatemember = member::whereMobile($phone_no)->update(['device_id' => $request->deviceId]);
                $member = member::whereMobile($phone_no)->get();
                return $member;
            }
            else{
                return response(404);
            }
        }
    }
    
    public function member(){
    	$member = member::orderBy('name')->get();
    	return $member;

    }
    
    public function BirthDay(){
    	$member =member::select('name','image')
    	    ->where('date', '>=',Carbon::today()->toDateString())
    	         ->get();
    	return $member;

    }
    
    public function Anniversary(){
       
        
         $birthday =member::select('name','Degination','date','image','image1','martial_status')
             ->where('martial_status','Unmarried')
             ->where('date', '=',Carbon::today()->format('M-d'))
    	         ->get();
    	       
         $anniversary =member::select('name','Degination','anniversary','image','image1','martial_status')
    	    ->where('martial_status','Married')
    	    ->where('anniversary', '=',Carbon::today()->format('M-d'))
    	       ->get(); 
 
    	         
    	        
    	          return array($birthday, $anniversary);
    	        

    }
    
}
