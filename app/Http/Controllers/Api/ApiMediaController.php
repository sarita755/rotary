<?php

namespace App\Http\Controllers\Api;

use App\media;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiMediaController extends Controller
{
    public function media(){
    	$media = media::all();
    	return $media;

    }
    
   
    public function Gallery(){
     $photos = media::select('image')
         ->where('mediatype', 'Gallery')
          ->get();
      return $photos;     

    }
   
    
     public function Slider(){
       $sliders = media::select('image')
           ->where('mediatype', 'Slider')
          ->get();
          return $sliders;    

    }
    
    
       public function Logo(){
        $logo = media::select('image')
            ->where('mediatype', 'Logo')
          ->take(1)
          ->get();
          return $logo;     

    

    }
    
    
}
