<?php

namespace App\Http\Controllers;

use App\article;
use App\media;
use App\member;
use App\News;
use App\Message;
use App\About;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function ManageMember(){
        $members=member::get();
       
        $user =Auth::user();
        return view('back.pages.managemember',compact('members','user'));
    }
    public function Store(Request $request){
        
        $first = $request->file('image');
        $second = $request->file('image1');
        $name = $first->getClientOriginalName();
        $name1 = $second->getClientOriginalName();
        $first->move('image/member',$name);
        $second->move('image/member',$name1);



        $member=new member([
            'image'=>$name,
            'image1'=>$name1,
            'martial_status' => $request->get('martial_status'),
            'date' => $request->get('date'),  
            'anniversary' => $request->get('anniversary'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'Work' => $request->get('Work'),
            'Degination' => $request->get('Degination'),
            'Blood_group' => $request->get('Blood_group'),
            'Mobile' => $request->get('Mobile'),
            'Spouse' => $request->get('Spouse'),
            'Ri_id' => $request->get('Ri_id'),
            'name' => $request->get('name'),
            'address' => $request->get('address')

        ]);
        $member->save();
        return redirect()->route('managemember');
    }
    
    




    public function Edit($id){
        $member=member::find($id);
        return $member;
    }



    public function Update(Request $request,$id){
       
        
        if ($request->hasFile('image')) {
          $first = $request->file('image');
        $second = $request->file('image1');
        $name = $first->getClientOriginalName();
        $name1 = $second->getClientOriginalName();
        $first->move('image/member',$name);
        $second->move('image/member',$name1);

        
            $member = member::find($id);
            $update_article = array(
               
                'image'=>$name,
                'image1'=>$name1,
            'martial_status' => $request->get('martial_status'),
            'date' => $request->get('date'),  
            'anniversary' => $request->get('anniversary'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'Work' => $request->get('Work'),
            'Degination' => $request->get('Degination'),
            'Blood_group' => $request->get('Blood_group'),
            'Mobile' => $request->get('Mobile'),
            'Spouse' => $request->get('Spouse'),
            'Ri_id' => $request->get('Ri_id'),
            'name' => $request->get('name'),
            'address' => $request->get('address')
             

            );
            $member->update($update_article);
            return redirect()->route('managemember');
        }else{
            $member = member::find($id);
            $update_article = array(
                'name' => $request->get('name'),
                'date' => $request->get('date'),
                'address' => $request->get('address'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'Work' => $request->get('Work'),
                'Degination' => $request->get('Degination'),
                'Blood_group' => $request->get('Blood_group'),
                'Mobile' => $request->get('Mobile'),
                'Spouse' => $request->get('Spouse'),
                'Ri_id' => $request->get('Ri_id')

            );
            $member->update($update_article);
            return redirect()->route('managemember');
        }
    }

    public function Delete($id){
        $member=member::find($id);
        $member->delete();
        return redirect()->route('managemember');
    }


 public function GetMember(){
       $members=member::orderBy('id','asc')
                                     ->get();
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
                                               
                                               
          return view('front.pages.allmembers',compact('members','messages','news','arts','lanews','abouts'));
 }

 



}
