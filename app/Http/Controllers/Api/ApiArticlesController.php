<?php

namespace App\Http\Controllers\Api;

use App\article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiArticlesController extends Controller
{
    public function article(){
    	$articles = article::all();
    	return $articles;
    }
    
    
    
    public function Intro(){
    	$articles=article::where('type', 'intro')
          ->take(1)
          ->get();
    	return $articles;
    }
    
    
    
    
    
    public function PlanOfAct(){
    	 $articles=article::where('type', 'plan action')
          ->take(1)
          ->get();
    	return $articles;
    }
    
    
  
    
    
}
