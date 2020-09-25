<?php

namespace App\Http\Controllers;

use App\article;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function ViewMessage(){
        $messages=Message::get();
        $user =Auth::user();
        return view('back.pages.managemessage',compact('messages','user'));
    }





    public function Store(Request $request){
         request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               ]);
             $image = $request->file('image');
             $name = $image->getClientOriginalName();
             $image->move('image/message',$name);
           $Messages=new Message([
           'image'=>$name,
            'title' => $request->get('title'),
            'name' => $request->get('name'),
            'date' => $request->get('date'),
            'message' => $request->get('message')

        ]);
        $Messages->save();
        return redirect()->route('viewmessage');
    }
    
    
     public function Edit($id){
        $message=Message::find($id);
        return $message;
        //return view('back.pages.edit-article',compact('Article','id'));

    }

    
     public function Update(Request $request,$id){
      
        if ($request->hasFile('image')) {
            request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               ]);
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move('image/message', $name);
            $member = Message::find($id);
            $update_article = array(
                'image'=>$name,
                'title' => $request->get('title'),
                'name' => $request->get('name'),
                'date' => $request->get('date'),
                'message' => $request->get('message')

            );
            $member->update($update_article);
            return redirect()->route('viewmessage');
        }else{
            $member = Message::find($id);
            $update_article = array(
                'title' => $request->get('title'),
                'name' => $request->get('name'),
                'date' => $request->get('date'),
                'message' => $request->get('message')

            );
            $member->update($update_article);
            return redirect()->route('viewmessage');
        }
    }




    public function Delete($id){
        $message=Message::find($id);
        $message->delete();
        return redirect()->route('viewmessage');
    }


   


 

}
