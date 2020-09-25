<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function View(){
        $Settings=Setting::get();
        $user =Auth::user();
        return view('back.pages.managesetting',compact('Settings','user'));
    }



 public function Store(Request $request){
        $files=new Setting([
            'pro_category' => $request->get('pro_category'),  
            'business_category' => $request->get('business_category')
        ]);
        $files->save();
        return redirect()->route('setting');
    }



            public function Edit($id){
        $File=Setting::find($id);
        return $File;
        //return view('back.pages.edit-article',compact('Article','id'));

    }




    public function Update(Request $request,$id){
        $file = Setting::find($id);
        $update_article = array(
            'pro_category' => $request->get('pro_category'),  
            'business_category' => $request->get('business_category')
        );
        $file->update($update_article);
        return redirect()->route('setting');
    }
    
    


 

}
