<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function ViewContact(){
        $contacts=contact::get();
        $user =Auth::user();
        return view('back.pages.managecontact',compact('contacts','user'));
    }





    public function Store(Request $request){
        $this->validate($request, [
            "name" => "required|string",
           "email" => "required|string",
            "Message" => "required",
            
        ]);
         
            
           $contacts=new contact([
           
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'Message' => $request->get('Message')

        ]);
        $contacts->save();
        return redirect()->route('contact');
    }
    
    
     

    
     




    public function Delete($id){
        $contact=contact::find($id);
        $contact->delete();
        return redirect()->route('viewcontact');
    }
}
