<?php

namespace App\Http\Controllers;

use App\pastpre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PresidentController extends Controller
{
    
       public function View(){
        $pastpres=pastpre::get();
        $user =Auth::user();
        return view('back.pages.managepresedent',compact('pastpres','user'));
  }
  
  public function Store(Request $request){
     
        $first = $request->file('image1');
        $second = $request->file('image2');
        $third = $request->file('image3');
        $name1 = $first->getClientOriginalName();
        $name2 = $second->getClientOriginalName();
        $name3 = $third->getClientOriginalName();
        $first->move('image/president',$name1);
        $second->move('image/president',$name2);
        $third->move('image/president',$name3);

        $member=new pastpre([

            'image1'=>$name1,
            'image2'=>$name2,
            'image3'=>$name3,
            'ri_year' => $request->get('ri_year'),
            'pre_name' => $request->get('pre_name'),
            'sec_name' => $request->get('sec_name')

        ]);
        $member->save();
        return redirect()->route('managepesident');
    }
    
    
       public function Edit($id){
        $edit=pastpre::find($id);
        return $edit;
    }
    
    
    
    
    
    
    
    public function Update(Request $request,$id){
        request()->validate([
            'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
               ]);
        
      if ($request->hasFile('image1')) {
        $first = $request->file('image1');
        $second = $request->file('image2');
         $third = $request->file('image3');
       
        $name1 = $first->getClientOriginalName();
        $name2 = $second->getClientOriginalName();
         $name3 = $third->getClientOriginalName();
      
        $first->move('image/president',$name1);
        $second->move('image/president',$name2);
        $third->move('image/president',$name3);
       
        
            $member = pastpre::find($id);
            $update_article = array(
               
            'image1'=>$name1,
            'image2'=>$name2,
            'image3'=>$name3,
         
            'ri_year' => $request->get('ri_year'),
            'pre_name' => $request->get('pre_name'),
            'sec_name' => $request->get('sec_name')
             

            );
            $member->update($update_article);
            return redirect()->route('managepesident');
        }else {
             $member = pastpre::find($id);
            $update_article = array(
            'ri_year' => $request->get('ri_year'),
            'pre_name' => $request->get('pre_name'),
            'sec_name' => $request->get('sec_name')
             

            );
            $member->update($update_article);
            return redirect()->route('managepesident');
            
            
        }
        
        
        
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
      public function Delete($id){
        $Delete=pastpre::find($id);
        $Delete->delete();
        return redirect()->route('managepesident');
    }
  
  
  
  
  
      
}      
