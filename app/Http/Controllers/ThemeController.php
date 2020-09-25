<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use App\theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThemeController extends Controller
{

    public function ManageTheme(){
        $themes=theme::get();
        $user =Auth::user();
        return view('back.pages.managetheme',compact('themes','user'));
      }


      public function StoreTheme(Request $request){
            request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               ]);
        $image = $request->file('image');
        $image1 = $request->file('image1');
        $name = $image->getClientOriginalName();
        $name1 = $image1->getClientOriginalName();
        $image->move('image/theme',$name);
        $image1->move('image1/theme',$name1);
        $themes=new Theme([
            'image'=>$name,
            'image1'=>$name1,
            'title' => $request->get('title'),
            'date' => $request->get('date'),
            'Description' => $request->get('Description')  

        ]);
        $themes->save();
        return back()

            ->with('success','You have successfully upload image.');
    }

    public function Delete($id){
        $theme=Theme::find($id);
        $theme->delete();
        return response([
            'status' => 200
        ],200);
        // return redirect()->route('managetheme');
    }


   public function Edit($id){
        $themes=theme::find($id);
         return $themes;
        //return view('back.pages.edit-theme',compact('theme','id'));

   }



    public function Update(Request $request,$id){
        
        if($request->hasFile('image')){
            request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               ]);
               
            $image = $request->file('image');
            $image1 = $request->file('image1');
            $name = $image->getClientOriginalName();
            $name1 = $image1->getClientOriginalName();
            $image->move('image/theme',$name);
            $image1->move('image/theme',$name1);
            $theme = theme::find($id);
            $update_theme = array(
                'image' => $name,
                'image1' => $name1,
                'date' => $request->get('date'),
                'title' => $request->get('title'),
                'Description' => $request->get('Description')


            );
            $theme->update($update_theme);
            return redirect()->route('managetheme');
        }else{
            $theme = theme::find($id);
            $update_theme = array(
                'date' => $request->get('date'),
                'title' => $request->get('title'),
                'Description' => $request->get('Description')


            );
            $theme->update($update_theme);
            return redirect()->route('managetheme');

        }

   }

}
