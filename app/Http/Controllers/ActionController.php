<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActionController extends Controller
{
    public function ManagePlan(){
        $plans=Plan::get();
        $user =Auth::user();
        return view('back.pages.manageplanofaction',compact('plans','user'));
      }

      public function StorePlan(Request $request){
        request()->validate([
            "name" => "required|string",
            "date" => "required|string",
            "month" => "required|string",
            "category" => "required|string",
             "Description" => "required",
           ]);
   
    $plans=new Plan([
        'name' => $request->get('name'),
        'date' => $request->get('date'),
        'month' => $request->get('month'),
        'category' => $request->get('category'),
        'Description' => $request->get('Description')  

    ]);
    $plans->save();
    return back()

        ->with('status','Data stored successfully.');
}

public function Delete($id){
    $plans=Plan::find($id);
    $plans->delete();
    return redirect()->route('manageplanofaction');
}

public function Edit($id){
    $plans=Plan::find($id);
     return $plans;
    //return view('back.pages.edit-article',compact('Article','id'));

}
public function Update(Request $request, $id){
    $this->validate($request,[
        "name" => "required|string",
        "date" => "required|string",
        "month" => "required|string",
       "category" => "required|string",
       "Description" => "required",
    ]);    
    $plans = Plan::find($id);
    $plans->name = $request['name'];
    $plans->date = $request['date'];
    $plans->month = $request['month'];
    $plans->category = $request['category'];
    $plans->Description = $request['Description'];
    $plans->save();
    return redirect('manageplanofaction')->with('status',"user updated successfully");


}

}
