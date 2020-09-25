<?php

namespace App\Http\Controllers;

use App\article;
use App\media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MediaController extends Controller
{
    public function ManageMedia(){
        $medias=media::get();
        $user =Auth::user();
       return view('back.pages.managemedia',compact('medias','user'));
        //    print_r('hello');
    }


    public function Store(Request $request){
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $image->move('image/media',$name);
        $media=new media([
            'image'=>$name,
            'title' => $request->get('title'),
            'date' => $request->get('date'),
            'mediatype' => $request->get('mediatype'),
            'Description' => $request->get('Description')

        ]);
        $media->save();
        return redirect()->route('managemedia');
    }

    public function Edit($id){
        $Media=media::find($id);
        return $Media;
        //return view('back.pages.edit-article',compact('Article','id'));

    }



    public function Update(Request $request,$id){

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move('image/media', $name);
            $article = media::find($id);
            $update_article = array(
                'image' => $name,
                'title' => $request->get('title'),
                'date' => $request->get('date'),
                'mediatype' => $request->get('mediatype'),
                'Description' => $request->get('Description')
            );
            $article->update($update_article);
            return redirect()->route('managemedia');
             }else{
            $article = media::find($id);
            $update_article = array(
                'title' => $request->get('title'),
                'date' => $request->get('date'),
                'mediatype' => $request->get('mediatype'),
                'Description' => $request->get('Description')

            );
            $article->update($update_article);
            return redirect()->route('managemedia');
        }

    }




    public function Delete($id){
        $media=media::find($id);
        $media->delete();
        return redirect()->route('managemedia');
    }

}
