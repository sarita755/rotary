<?php

namespace App\Http\Controllers;

use App\dember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    
         public function ManageNotification(){
            
            $Notifications=dember::get();
            $user =Auth::user();
            return view('back.pages.managenotification',compact('user','Notifications'));
            }
            
            public function Store(Request $request){
               request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               ]);


            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move('image/notification',$name);
              $about=new dember([
              'image'=>$name,
              'title' => $request->get('title'),
               'date' => $request->get('date'), 
                'status' => $request->get('status'),
               'Description' => $request->get('Description')

              ]);
                $about->save();
              return redirect()->route('managenotification');
             }


          public function Edit($id){
            $about=dember::find($id);
            return $about;
             }
             
         public function Delete($id){
          $about=dember::find($id);
          $about->delete();
          return redirect()->route('managenotification');
         }
             
             
             
     public function Update(Request $request,$id){
        if($request->hasFile('image')){
            request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               ]);
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move('image/notification',$name);
            $article = dember::find($id);
            $update_article = array(
                'image' => $name,
                 'title' => $request->get('title'),
                 'date' => $request->get('date'), 
                'status' => $request->get('status'),
               'Description' => $request->get('Description')


            );
            $article->update($update_article);
            return redirect()->route('managenotification');
        }else{
            $article = dember::find($id);
            $update_article = array(
                'title' => $request->get('title'),
                'date' => $request->get('date'), 
                'status' => $request->get('status'),
               'Description' => $request->get('Description')
            );
            $article->update($update_article);
            return redirect()->route('managenotification');

        }

   }
            
            
            
            
            
            
            
            
            
 

}
