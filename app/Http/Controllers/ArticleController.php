<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use App\article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    public function ManageArticle(){
        $articles=article::get();
        $user =Auth::user();
        return view('back.pages.managearticle',compact('articles','user'));
      }


      public function StoreArticle(Request $request){
            request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               ]);
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $image->move('image/article',$name);
        $articles=new Article([
            'image'=>$name,
            'title' => $request->get('title'),
            'date' => $request->get('date'),
            'type' => $request->get('type'),
            'Description' => $request->get('Description')  

        ]);
        $articles->save();
        return back()

            ->with('success','You have successfully upload image.');
    }

    public function Delete($id){
        $article=Article::find($id);
        $article->delete();
        return redirect()->route('managearticle');
    }


   public function Edit($id){
        $Article=article::find($id);
         return $Article;
        //return view('back.pages.edit-article',compact('Article','id'));

   }



    public function Update(Request $request,$id){
        
        if($request->hasFile('image')){
            request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               ]);
               
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move('image/article',$name);
            $article = article::find($id);
            $update_article = array(
                'image' => $name,
                'title' => $request->get('title'),
                'type' => $request->get('type'),
                'date' => $request->get('date'),
                'Description' => $request->get('Description')


            );
            $article->update($update_article);
            return redirect()->route('managearticle');
        }else{
            $article = article::find($id);
            $update_article = array(
                'title' => $request->get('title'),
                'date' => $request->get('date'),
                'type' => $request->get('type'),
                'Description' => $request->get('Description')


            );
            $article->update($update_article);
            return redirect()->route('managearticle');

        }

   }

}
