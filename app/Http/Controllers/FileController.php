<?php

namespace App\Http\Controllers;

use App\article;
use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    public function ViewFile(){
        $files=File::get();
        $user =Auth::user();
        return view('back.pages.managefile',compact('user','files'));
    }


    public function Store(Request $request){
      
        $file = $request->file('file');
        $name = $file->getClientOriginalName();
       $file->move('image/project',$name);
        $files=new File([
            'file'=>$name,
            'name' => $request->get('name'),  
            'Description' => $request->get('Description'),
            'protype' => $request->get('protype'), 
            'date' => $request->get('date') 
            
        ]);
        $files->save();
        return redirect()->route('viewfile');
    }


    public function Edit($id){
        $File=File::find($id);
        return $File;
        //return view('back.pages.edit-article',compact('Article','id'));

    }




    public function Update(Request $request,$id){
         if ($request->hasFile('image')) {
        $file = $request->file('file');
        $name = $file->getClientOriginalName();
        $file->move('image/project',$name);
        $file = File::find($id);
        $update_article = array(
            'file' => $name, 
            'name' => $request->get('name'),  
            'Description' => $request->get('Description'),
            'protype' => $request->get('protype'), 
            'date' => $request->get('date') 
        );
        $file->update($update_article);
        return redirect()->route('viewfile');
    }else{
           $article = File::find($id);
            $update_article = array(
             'name' => $request->get('name'),  
            'Description' => $request->get('Description'),
            'protype' => $request->get('protype'), 
            'date' => $request->get('date') 
            );
            $article->update($update_article);
            return redirect()->route('viewfile');
        
    }
    
    
    }
    
    
    
    
    
    
    



    public function Delete($id){
        $file=File::find($id);
        $file->delete();
        return redirect()->route('viewfile');
    }




}
