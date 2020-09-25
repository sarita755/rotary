<?php

namespace App\Http\Controllers;


use App\council;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CouncilController extends Controller
{
    public function View(){
        $councils=council::get();
        $user =Auth::user();
        return view('back.pages.managecouncil',compact('councils','user'));
    }
    
    
    
    
     public function Store(Request $request){
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               ]);
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $image->move('image/council',$name);
        $councils=new council([
            'image'=>$name,
            'year' => $request->get('year'),
            'post' => $request->get('post'),
            'name' => $request->get('name'),
            'Designation' => $request->get('Designation'),
        ]);
        $councils->save();
        return redirect()->route('managecouncil');
    }
    
    
    
     public function Edit($id){
        $councils=council::find($id);
        return $councils;
    }
    
    
    
    
    
    
    
    public function Update(Request $request,$id){
        
        if ($request->hasFile('image')) {
            request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               ]);
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move('image/council', $name);
            $councils = council::find($id);
            $update_council = array(
                'image'=>$name,
                'year' => $request->get('year'),
                 'post' => $request->get('post'),
                 'name' => $request->get('name'),
                 'Designation' => $request->get('Designation'),

            );
            $councils->update($update_council);
            return redirect()->route('managecouncil');
        }else{
            $councils = council::find($id);
            $update_council = array(
                 'post' => $request->get('post'),
                 'name' => $request->get('name')

            );
            $councils->update($update_council);
            return redirect()->route('managecouncil');
        }
    }

    
    
    
    
    
    
    
     public function Delete($id){
          $council=council::find($id);
          $council->delete();
          return redirect()->route('managecouncil');
         }
            

   
}
