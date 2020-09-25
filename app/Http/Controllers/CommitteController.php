<?php

namespace App\Http\Controllers;

use App\Committe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommitteController extends Controller
{
    public function ManageCommitte(){
     
              $committes=Committe::get();
              $user =Auth::user();
              return view('back.pages.managecommitte',compact('user','committes'));
              }
  
             public function StoreCommitte(Request $request){
                 request()->validate([
              'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                 ]);
  
  
              $image = $request->file('image');
              $name = $image->getClientOriginalName();
              $image->move('image/committe',$name);
                $committes=new Committe([
                'image'=>$name,
                'date'=>$request->get('date'),
                'title' => $request->get('title'),
                'chairperson'=> $request->get('chairperson'),
                 'Description' => $request->get('Description')
  
                ]);
                  $committes->save();
                return redirect()->route('managecommitte');
               }
  
  
            public function Edit($id){
              $committe=Committe::find($id);
              return $committe;
               }
               
           public function Delete($id){
            $committe=Committe::find($id);
            $committe->delete();
            return redirect()->route('managecommitte');
           }
               
               
               
       public function Update(Request $request,$id){
          if($request->hasFile('image')){
              request()->validate([
              'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                 ]);
              $image = $request->file('image');
              $name = $image->getClientOriginalName();
              $image->move('image/committe',$name);
              $committe = Committe::find($id);
              $update_committe = array(
                  'image' => $name,
                  'date'=>$request->get('date'),
                   'title' => $request->get('title'),
                   'chairperson'=>$request->get('chairperson'),
                 'Description' => $request->get('Description')
  
  
              );
              $committe->update($update_committe);
              return redirect()->route('managecommitte');
          }else{
              $committe = Committe::find($id);
              $update_committe = array(
                  'name' => $request->get('name'),
                 'Description' => $request->get('Description')
              );
              $committe->update($update_committe);
              return redirect()->route('managecommitte');
  
          }
  
     }
               
               
               
  
       
}
