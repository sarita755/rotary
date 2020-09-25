<?php

namespace App\Http\Controllers;

use App\project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function ManageProject(){
        $projects=project::get();
        $user =Auth::user();
        return view('back.pages.manageproject',compact('projects','user'));
      }


      public function StoreProject(Request $request){
            request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               ]);
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $image->move('image/project',$name);
        $projects=new Project([
            'image'=>$name,
            'date' => $request->get('date'),
            'name' => $request->get('name'),
            'Description' => $request->get('Description')  

        ]);
        $projects->save();
        return back()

            ->with('success','You have successfully upload image.');
    }

    public function Delete($id){
        $project=Project::find($id);
        $project->delete();
        return redirect()->route('manageproject');
    }


   public function Edit($id){
        $Project=project::find($id);
         return $Project;
        //return view('back.pages.edit-article',compact('Article','id'));

   }



    public function Update(Request $request,$id){
        
        if($request->hasFile('image')){
            request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               ]);
               
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move('image/project',$name);
            $project = project::find($id);
            $update_project = array(
                'image' => $name,
                'date' => $request->get('date'),
                'name' => $request->get('name'),
                'Description' => $request->get('Description')


            );
            $project->update($update_project);
            return redirect()->route('manageproject');
        }else{
            $project = project::find($id);
            $update_project = array(
                'date' => $request->get('date'),
                'name' => $request->get('name'),
                'Description' => $request->get('Description')


            );
            $project->update($update_project);
            return redirect()->route('manageproject');

        }

   }
}
