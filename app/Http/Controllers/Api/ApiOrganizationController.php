<?php

namespace App\Http\Controllers\Api;

use App\bulletin;
use App\organization;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiOrganizationController extends Controller
{
    public function organization(){
    
     $a = organization::select('org_type')
                    ->groupBy('org_type')
                    ->get();
                    
                    return $a;

    }

    


   public function single_partner(Request $request){
          $organization = organization::where("org_type",$request->org_type)->get();
        return $organization;
    }
    
    
 
   public function Business(){
     $bulletins=bulletin::get();
             return $bulletins;
    }
    
    
    
    
   public function Login(){
     $bulletins=bulletin::get();
             return $bulletins;
    }
    
    
    
    
    
    
}
