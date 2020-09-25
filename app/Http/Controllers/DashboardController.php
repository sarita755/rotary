<?php

namespace App\Http\Controllers;

use App\article;
use App\organization;
use App\file;
use App\media;
use App\BOD;
use App\member;
use App\News;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function Admin(){
        $countbod=count(BOD::get()); 
        $countnews=count(News::get());
        $countorganization=count(organization::get());
        $countmembers=count(member::get());
        $user =Auth::user();
        $countmedias=count(media::get());

       // print_r($countarticles);
        return view('back.pages.admin',compact('countorganization','countnews','countmembers','countmedias','user','countbod'));
    }


    public function __construct()
    {
        $this->middleware('auth');
    }

}
