<?php

namespace App\Http\Controllers;

use App\project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SingleProjectController extends Controller
{
    public function ViewProject($id){
        $project=project::find($id);
        return view('front.pages.singleproject',compact('project'));
     }
}
