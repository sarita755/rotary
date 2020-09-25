<?php

namespace App\Http\Controllers;


use App\bulletin;
use App\member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BulletinController extends Controller
{
    public function View(){
        $bulletins=bulletin::get();
         $members=member::get();
        $user =Auth::user();
        return view('back.pages.managebulletin',compact('user','bulletins','members'));
    }
   
     public function Store(Request $request){
        $first = $request->file('image');
        $second = $request->file('image1');
        $third = $request->file('image2');
        $name = $first->getClientOriginalName();
        $name1 = $second->getClientOriginalName();
        $name2 = $third->getClientOriginalName();
        $first->move('image/business',$name);
        $second->move('image/business',$name1);
        $third->move('image/business',$name2);

        $files=new bulletin([
            'image'=>$name,
            'image1'=>$name1,
            'image2'=>$name2,
            'member' => $request->get('member'),
            'business' => $request->get('business'),
            'address' => $request->get('address'),
            'Description' => $request->get('Description')
            
            
            
            
        ]);
        $files->save();
        return redirect()->route('managebusiness');
    }
    
    
       public function Edit($id){
        $edit=bulletin::find($id);
        return $edit;
    }
    
    
    
    
    
    
    public function Update(Request $request,$id){
       
        if ($request->hasFile('image')) {
            $first = $request->file('image');
        $second = $request->file('image1');
        $third = $request->file('image2');
        $name = $first->getClientOriginalName();
        $name1 = $second->getClientOriginalName();
        $name2 = $third->getClientOriginalName();
        $first->move('image/business',$name);
        $second->move('image/business',$name1);
        $third->move('image/business',$name2);
        
            $member = bulletin::find($id);
            $update_article = array(
               
                'image'=>$name,
            'image1'=>$name1,
            'image2'=>$name2,
                 'member' => $request->get('member'),
            'business' => $request->get('business'),
            'address' => $request->get('address'),
            'Description' => $request->get('Description')
            );
            $member->update($update_article);
            return redirect()->route('managebusiness');
        }else{
            $member = bulletin::find($id);
            $update_article = array(
                 'member' => $request->get('member'),
            'business' => $request->get('business'),
            'address' => $request->get('address'),
            'Description' => $request->get('Description')

            );
            $member->update($update_article);
            return redirect()->route('managebusiness');
        }
    }


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     public function Delete($id){
          $bulletin=bulletin::find($id);
          $bulletin->delete();
          return redirect()->route('managebulletin');
         }
    
    
    
    


}
