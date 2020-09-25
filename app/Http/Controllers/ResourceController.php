<?php

namespace App\Http\Controllers;

use App\resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResourceController extends Controller
{
    public function ManageResource(){
        $resources=resource::get();
        $user =Auth::user();
        return view('back.pages.manageresource',compact('resources','user'));
      }

      public function StoreResource(Request $request){
        request()->validate([
            'file' => 'required|file|mimes:doc,docx,pdf,gif,svg|max:5048',
               ]);
        
        $file = $request->file('file');
        $name = $file->getClientOriginalName();
       $file->move('image/resource',$name);
        $resources=new Resource([
            'file'=>$name,
            'name' => $request->get('name'),
            'date' => $request->get('date'),  
            'title' => $request->get('title'),
            'type' => $request->get('type'), 
            
            
        ]);
        $resources->save();
    return back()

        ->with('success','You have successfully upload image.');
}

    public function Edit($id){
       $resources=resource::find($id);
       return $resources;
    //return view('back.pages.edit-article',compact('Article','id'));

}
     public function download($file){
         return response()->download('image/resource/'.$file);

     }

    public function Delete($id){
      $resource=resource::find($id);
       $resource->delete();
       return redirect()->route('manageresource');
}

public function Update(Request $request,$id){
    if ($request->hasFile('file')) {
        
            request()->validate([
         'file' => 'required|file|mimes:doc,docx,pdf,gif,svg|max:5048',
            
               ]);
   $file = $request->file('file');
   $name = $file->getClientOriginalName();
   $file->move('image/resource',$name);
   $resource = resource::find($id);
   $update_resource = array(
       'file' => $name, 
       'name' => $request->get('name'),
       'date' => $request->get('date'),
       'title' => $request->get('titlle'),  
       'type' => $request->get('type'),
        
        
   );
   $file->update($update_resource);
   return redirect()->route('manageresource');
}else{
      $resource = resource::find($id);
       $update_resource = array(
        'date' => $request->get('date'),  
       'title' => $request->get('title'),
       'type' => $request->get('type'), 
       
       );
       $resource->update($update_resource);
       return redirect()->route('manageresource');
   
}


}


}
