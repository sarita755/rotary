<?php

namespace App\Http\Controllers;


use App\organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrganizationController extends Controller
{
    public function View(){
        $organizations=organization::get();
        $user =Auth::user();
        return view('back.pages.manageorganization',compact('user','organizations'));
    }
    
 

    
    public function Store(Request $request){
        $first = $request->file('image');
        $second = $request->file('image1');
        $name = $first->getClientOriginalName();
        $name1 = $second->getClientOriginalName();
        $first->move('image/organization',$name);
        $second->move('image1/organization',$name1);
        $member=new organization([
            'image'=>$name,
            'image1'=>$name1,
            'established_year' => $request->get('established_year'),
            'org_name' => $request->get('org_name'),
            'org_type' => $request->get('org_type'),
            'pre_name' => $request->get('pre_name'),
            'pre_contact' => $request->get('pre_contact'),
            'sec_name' => $request->get('sec_name'),
            'sec_contact' => $request->get('sec_contact')

        ]);
        $member->save();
        return redirect()->route('manageorganization');
    }
    
    
    
       public function Edit($id){
        $edit=organization::find($id);
        return $edit;
    }
    
    
    
    
    
  public function Update(Request $request,$id){
       if ($request->hasFile('image')) {
       $first = $request->file('image');
        $second = $request->file('image1');
        $name = $first->getClientOriginalName();
        $name1 = $second->getClientOriginalName();
        $first->move('image/organization',$name);
        $second->move('image1/organization',$name1);
        
            $member = organization::find($id);
            $update_article = array(
               'image'=>$name,
            'image1'=>$name1,
            'established_year' => $request->get('established_year'),
            'org_name' => $request->get('org_name'),
            'org_type' => $request->get('org_type'),
            'pre_name' => $request->get('pre_name'),
            'pre_contact' => $request->get('pre_contact'),
            'sec_name' => $request->get('sec_name'),
            'sec_contact' => $request->get('sec_contact')
             

            );
            $member->update($update_article);
            return redirect()->route('manageorganization');
            }else{
            $member = organization::find($id);
            $update_article = array(
               'established_year' => $request->get('established_year'),
               'org_name' => $request->get('org_name'),
               'org_type' => $request->get('org_type'),
               'pre_name' => $request->get('pre_name'),
               'pre_contact' => $request->get('pre_contact'),
               'sec_name' => $request->get('sec_name'),
               'sec_contact' => $request->get('sec_contact')

            );
            $member->update($update_article);
            return redirect()->route('manageorganization');
        }
       
    }
    
    
    
    
    
    
    
    
     public function Delete($id){
          $organization=organization::find($id);
          $organization->delete();
          return redirect()->route('manageorganization');
         }
    

}
