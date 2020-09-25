<?php

namespace App\Http\Controllers;

use App\article;
use App\Message;
use App\News;
use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function ViewNews(){
        $news=News::get();
        $user =Auth::user();
        return view('back.pages.managenews',compact('news','user'));
    }

    public function GetNews(){

        $news= News::orderBy('title','asc')
                              ->get();
       $messages= Message::orderBy('id','asc')
                                ->take(3)
                                  ->get();
        $arts=article::where('type', 'logo')
                                ->take(1)
                                ->get();
       $lanews = News::orderBy('title','asc')
                            ->take(2)
                              ->get();
                              $abouts = about::orderBy('title','asc')
               ->take(1)
              ->get();
          
          
          
         return view('front.pages.allnews',compact('news','messages','arts','lanews','abouts'));

    }

    public function Store(Request $request){
         request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               ]);
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $image->move('image/news',$name);
        $news=new News([
            'image'=>$name,
            'title' => $request->get('title'),
            'location' => $request->get('location'),
            'Description' => $request->get('Description'),
            'date' => $request->get('date')

        ]);

        $news->save();
        return redirect()->route('viewnews');
    }
    
    
    
    
    public function Edit($id){
        $news=News::find($id);
        return $news;
    }
    
    
    
    
    
    
      public function Update(Request $request,$id){
           
        if ($request->hasFile('image')) {
            request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               ]);
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move('image/news', $name);
            $member = News::find($id);
            $update_article = array(
                'image'=>$name,
                'title' => $request->get('title'),
                'location' => $request->get('location'),
                'Description' => $request->get('Description'),
                'date' => $request->get('date')

            );
            $member->update($update_article);
            return redirect()->route('managemember');
        }else{
            $member = News::find($id);
            $update_article = array(
                'title' => $request->get('title'),
                'location' => $request->get('location'),
                'Description' => $request->get('Description'),
                'date' => $request->get('date')

            );
            $member->update($update_article);
            return redirect()->route('viewnews');
        }
    }

    
    
    
    
    
    
    
    
    
    


    public function Delete($id){
        $news=News::find($id);
        $news->delete();
        return redirect()->route('viewnews');
    }

}
