<?php

namespace App\Http\Controllers;

use App\article;
use App\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
{
    public function View(){
        $plans=Plan::get();
        $user =Auth::user();
        return view('back.pages.manageplan',compact('user','plans'));
    }
    
    public function Store(Request $request){
        
        $files=new Plan([
            'name' => $request->get('name'),  
            'date' => $request->get('date'),
            'month' => $request->get('month'),
            'category' => $request->get('category'), 
            'Description' => $request->get('Description') 
             
            
        ]);
        $files->save();
        return redirect()->route('manageplan');
    }


    
    public function Edit($id){
        $File=Plan::find($id);
        return $File;
    }





}
