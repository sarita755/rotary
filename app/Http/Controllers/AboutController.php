<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
     public function ManageAbout(){
      $count = about::count();
            $abouts=About::get();
            $user =Auth::user();
            return view('back.pages.manageabout',compact('user','abouts'));
            }

           public function StoreAbout(Request $request){
               request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               ]);


            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move('image/about',$name);
              $about=new About([
              'image'=>$name,
              'title' => $request->get('title'),
              'name' => $request->get('name'),
               'Description' => $request->get('Description')

              ]);
                $about->save();
              return redirect()->route('manageabout');
             }


          public function Edit($id){
            $about=About::find($id);
            return $about;
             }
             
         public function Delete($id){
          $about=About::find($id);
          $about->delete();
          return redirect()->route('manageabout');
         }
             
             
             
     public function Update(Request $request,$id){
        if($request->hasFile('image')){
            request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               ]);
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move('image/about',$name);
            $article = About::find($id);
            $update_article = array(
                'image' => $name,
                 'title' => $request->get('title'),
                 'name' => $request->get('name'),
               'Description' => $request->get('Description')


            );
            $article->update($update_article);
            return redirect()->route('manageabout');
        }else{
            $article = About::find($id);
            $update_article = array(
                'title' => $request->get('title'),
                'name' => $request->get('name'),
               'Description' => $request->get('Description')
            );
            $article->update($update_article);
            return redirect()->route('manageabout');

        }

   }
             
             
             

     public function GetAbout(){
         $abouts=about::get();
         dd(abouts);
         return view('front.pages.userview',compact('abouts'));
     }

}
