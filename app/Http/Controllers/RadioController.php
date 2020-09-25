<?php

namespace App\Http\Controllers;


use App\radio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    public function View(){
        $radios=radio::get();
        $user =Auth::user();
        return view('back.pages.managefile',compact('user','radios'));
    }





}
