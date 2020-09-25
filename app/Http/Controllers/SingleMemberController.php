<?php

namespace App\Http\Controllers;

use App\member;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SingleMemberController extends Controller
{
    public function ViewMember($id){
        $member=member::find($id);
        $members=member::orderBy('id','asc')
                        ->take(4)
                         ->get();
        return view('front.pages.singlemember',compact('member','members'));
     }
}
