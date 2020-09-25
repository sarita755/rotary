<?php

namespace App\Http\Controllers;

use App\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function ManageProfile(){
        $profiles=profile::get();
        $user =Auth::user();
        return view('back.pages.manageprofile',compact('profiles','user'));
      }


      public function StoreProfile(Request $request){
        request()->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           ]);
    $image = $request->file('image');
    $name = $image->getClientOriginalName();
    $image->move('image/article',$name);
    $profiles=new Profile([
        'image'=>$name,
        'title' => $request->get('title'),
        'type' => $request->get('type'),
        'url' => $request->get('url'),
        'Details' => $request->get('Details')  

    ]);
    $profiles->save();
    return back()

        ->with('success','You have successfully upload image.');
}
public function Delete($id){
    $profile=Profile::find($id);
    $profile->delete();
    return redirect()->route('manageprofile');
}
public function Edit($id){
    $profile=profile::find($id);
     return $Profile;
    //return view('back.pages.edit-article',compact('Article','id'));

}
public function Update(Request $request,$id){
        
    if($request->hasFile('image')){
        request()->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           ]);
           
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $image->move('image/profile',$name);
        $profile = profile::find($id);
        $update_profile = array(
            'image' => $name,
            'title' => $request->get('title'),
            'type' => $request->get('type'),
            'url' => $request->get('url'),
            'Details' => $request->get('Details')


        );
        $profile->update($update_profile);
        return redirect()->route('manageprofile');
    }else{
        $profile = profile::find($id);
        $update_profile = array(
            'title' => $request->get('title'),
            'url' => $request->get('url'),
            'type' => $request->get('type'),
            'Details' => $request->get('Details')


        );
        $profile->update($update_profile);
        return redirect()->route('manageprofile');

    }

}

}
