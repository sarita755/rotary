<?php

namespace App\Http\Controllers;

use App\leadermessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LeadermessageController extends Controller
{
    public function Managemessage(){
        $leadermessages=leadermessage::get();
        $user =Auth::user();
        return view('back.pages.manageleadermessage',compact('leadermessages','user'));
      }

      public function Store(Request $request){
        request()->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           ]);
    $image = $request->file('image');
    $name = $image->getClientOriginalName();
    $image->move('image/leadermessage',$name);
    $leadermessages=new leadermessage([
        'image'=>$name,
        'date' => $request->get('date'),
        'post' => $request->get('post'),
        'name' => $request->get('name'),
        'Message' => $request->get('Message')  

    ]);
    $leadermessages->save();
    return back()

        ->with('success','You have successfully upload image.');
}

public function Delete($id){
    $leadermessages=leadermessage::find($id);
    $leadermessages->delete();
    return redirect()->route('manageleadermessage');
}
public function Edit($id){
    $leadermessages=leadermessage::find($id);
     return $leadermessages;
     
    //return view('back.pages.edit-leadermessage',compact('leadermessage','id'));

}

public function Update(Request $request,$id){
        
    if($request->hasFile('image')){
        request()->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           ]);
           
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $image->move('image/leadermessage',$name);
        $leadermessages = leadermessage::find($id);
        $update_leadermessage = array(
            'image' => $name,
            'date' => $request->get('date'),
            'post' => $request->get('post'),
            'name' => $request->get('name'),
            'Message' => $request->get('Message')


        );
        $leadermessages->update($update_leadermessage);
        return redirect()->route('manageleadermessage');
    }else{
        $leadermessages = leadermessage::find($id);
        $update_leadermessage = array(
            'date' => $request->get('date'),
            'post' => $request->get('post'),
            'name' => $request->get('name'),
            'Message' => $request->get('Message')


        );
        $leadermessages->update($update_leadermessage);
        return redirect()->route('manageleadermessage');

    }

}



}
