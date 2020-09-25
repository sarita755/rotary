<?php

namespace App\Http\Controllers;

use App\article;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\BOD;
use App\News;
use App\About;
use App\media;

class BODController extends Controller
{
    public function ViewBod(){
        $bods=BOD::get();
        $user =Auth::user();
        return view('back.pages.managebod',compact('bods','user'));
    }

    public function Store(Request $request){
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               ]);
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $image->move('image',$name);
        $bod=new BOD([
            'image'=>$name,
            'title' => $request->get('title'),
            'name' => $request->get('name')
        ]);
        $bod->save();
        return redirect()->route('managebod');
    }



       public function Edit($id){
        $bod=BOD::find($id);
        return $bod;
    }
    
    
    
    
     public function Update(Request $request,$id){
        
        if ($request->hasFile('image')) {
            request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               ]);
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move('image', $name);
            $member = BOD::find($id);
            $update_article = array(
                'image'=>$name,
                 'title' => $request->get('title'),
                 'name' => $request->get('name')

            );
            $member->update($update_article);
            return redirect()->route('managebod');
        }else{
            $member = BOD::find($id);
            $update_article = array(
                 'title' => $request->get('title'),
                 'name' => $request->get('name')

            );
            $member->update($update_article);
            return redirect()->route('managebod');
        }
    }


        public function Delete($id){
          $about=BOD::find($id);
          $about->delete();
          return redirect()->route('managebod');
         }
            
    
    
    


    public function GetBod(){
        $bods=BOD::all()->where('title','<>','President');
        $Presidents=BOD::get()->where('title','President');
        $messages= Message::orderBy('id','asc')
            ->take(3)
            ->get();
        $news= News::orderBy('title','asc')
            ->get();
             $arts = media::where('mediatype', 'Logo')
          ->take(1)
          ->get();
           $lanews = News::orderBy('title','asc')
                            ->take(2)
                              ->get();
           $abouts = about::orderBy('title','asc')
               ->take(1)
              ->get();
        return view('front.pages.allbod',compact('bods','arts','messages','news','Presidents','lanews','abouts'));
    }



}
