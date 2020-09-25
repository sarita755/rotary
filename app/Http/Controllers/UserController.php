<?php

namespace App\Http\Controllers;
use App\Message;
use App\News;
use App\About;
use App\article;
use App\dember;
use Carbon\Carbon;
use App\pastpre;
use App\council;
use App\organization;
use App\media;
use App\bulletin;
use App\Faq;
use App\leadermessage;
use App\theme;
use App\member;
use App\resource;
use App\Plan;
use App\project;
use App\Committe;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    
    
  
     public function Managefaq(){
      $count = about::count();
            $faqs=Faq::get();
          
            $user =Auth::user();
            return view('back.pages.managefaq',compact('user','faqs'));
            }
            
            
  public function Deletefaq($id){
        $faq=Faq::find($id);
        $faq->delete();
        return redirect()->route('managefaq');
    }
    
    
       public function Storefaq(Request $request){
      
        $faq=new Faq([
            
            'mgs1' => $request->get('mgs1'),
            'mgs2' => $request->get('mgs2')
        ]);
        $faq->save();
        return redirect()->route('managefaq');
    }





         
     public function Faq(){
        $bulletins= bulletin::get();
         $councils= pre_council::get();
          $faqs= Faq::get();
                
      $messages = Message::orderBy('id','asc')
                                ->take(3)
                                ->get();
      $news = News::orderBy('title','asc')
                            ->take(3)
                              ->get();
       $lanews = News::orderBy('title','asc')
                            ->take(2)
                              ->get();
      $abouts = about::orderBy('title','asc')
          ->take(1)
          ->get();
         
     $arts = media::where('mediatype', 'Logo')
          ->take(1)
          ->get();
     $articles = article::where('type', 'Featured news')
          ->take(1)
          ->get();
      $Notifications = dember::where('date', '>=', Carbon::now()->toDateString())
        ->where('status', 'Enabled')->get()->take(1);
      return view('front.pages.faq',compact('messages','arts','news','abouts','articles','Notifications','lanews','councils','bulletins','faqs'));
   }
          
              
              
    
    // where('date', '>=',Carbon::tomorrow()->toDateString())
    
    
    







    
    
    public function index(){
      $messages = Message::orderBy('id','asc')
                                ->take(3)
                                ->get();
      $news = News::orderBy('title','asc')
                            ->take(3)
                              ->get();
       $lanews = News::orderBy('title','asc')
                            ->take(2)
                              ->get();
      $abouts = about::orderBy('title','asc')
          ->take(1)
          ->get();
         
     $arts = media::where('mediatype', 'Logo')
          ->take(1)
          ->get();
          $sliders = media::where('mediatype', 'Slider')
          ->take(3)
          ->get();
          
     $articles = article::where('type', 'six area focused')
          ->take(6)
          ->get();
    

     $themes = theme::orderBy('id', 'asc')
          ->take(4)
          ->get();

     $leadermessages = leadermessage::orderBy('id','asc')
          ->take(3)
          ->get();

      $members=member::orderBy('id','asc')
          ->get();
      
      $projects = project::orderBy('id', 'asc')
          ->take(3)
          ->get();
         
      $Notifications = dember::where('date', '>=', Carbon::now()->toDateString())
        ->where('status', 'Enabled')->get()->take(1);
// dd($Notifications);
      return view('front.pages.index',compact('projects','messages','arts','news','abouts','articles','Notifications','lanews','sliders','leadermessages','themes','members'));
   }



  public function ViewMessage(){
    $messages = Message::orderBy('id','asc')
                                ->take(3)
                                ->get();  
    $articles=article::where('type', 'intro')
  ->take(1)
  ->get();
  $messages= Message::get();
 $arts = media::where('mediatype', 'Logo')
  ->take(1)
  ->get();
  $arts = media::where('mediatype', 'Team')
  ->take(4)
  ->get();
   $lanews = News::orderBy('title','asc')
                    ->take(2)
                      ->get();
      $abouts = about::orderBy('title','asc')
  ->take(1)
  ->get();
  $leadermessages = leadermessage::orderBy('id','asc')
  ->take(3)
  ->get();
  
 
  return view('front.pages.messagepage',compact('news','arts','messages','articles','lanews','abouts','leadermessages'));

}













   




       public function ViewNews($id){
          $news=News::find($id);
           $arts = media::where('mediatype', 'Logo')
          ->take(1)
          ->get();
           $articles=article::where('type', 'intro')
          ->take(1)
          ->get();
           $lanews = News::orderBy('title','asc')
                            ->take(2)
                              ->get();
          $messages= Message::get();
           $abouts = about::orderBy('title','asc')
          ->take(1)
          ->get();
          return view('front.pages.newspage',compact('news','messages','arts','articles','lanews','abouts'));

       }
       

       public function ViewMember($id){
        $members=member::find($id);
         $arts = media::where('mediatype', 'Logo')
        ->take(1)
        ->get();
         $articles=article::where('type', 'intro')
        ->take(1)
        ->get();
         $lanews = News::orderBy('title','asc')
                          ->take(2)
                            ->get();
        $messages= Message::get();
         $abouts = about::orderBy('title','asc')
        ->take(1)
        ->get();
        return view('front.pages.singlemember',compact('members','news','messages','arts','articles','lanews','abouts'));

     }
     
       
        public function ViewArticle($id){
          $news=News::find($id);
          $articles=article::find($id);
          $messages= Message::get();
           $lanews = News::orderBy('title','asc')
                            ->take(2)
                              ->get();
        $arts = media::where('mediatype', 'Logo')
          ->take(1)
          ->get();
           $abouts = about::orderBy('title','asc')
          ->take(1)
          ->get();
          return view('front.pages.articlepage',compact('news','messages','articles','lanews','arts','abouts'));
          

       }
       
       
       
          public function ViewIntro(){
         
            $articles=article::where('type', 'intro')
          ->take(1)
          ->get();
          $messages= Message::get();
         $arts = media::where('mediatype', 'Logo')
          ->take(1)
          ->get();
          $arts = media::where('mediatype', 'Team')
          ->take(4)
          ->get();
           $lanews = News::orderBy('title','asc')
                            ->take(2)
                              ->get();
              $abouts = about::orderBy('title','asc')
          ->take(1)
          ->get();
          
         
          return view('front.pages.intropage',compact('news','arts','messages','articles','lanews','abouts'));

       }
       
       
       
       
        public function ViewRi(){
         
            $articles=article::where('type', 'ri intro')
          ->take(1)
          ->get();
          $messages= Message::get();
          $arts = media::where('mediatype', 'Logo')
          ->take(1)
          ->get();
           $lanews = News::orderBy('title','asc')
                            ->take(2)
                              ->get();
            $abouts = about::orderBy('title','asc')
          ->take(1)
          ->get();
          
         
          return view('front.pages.riintropage',compact('news','arts','messages','articles','lanews','abouts'));

       }
       
         public function ViewPlan(){

          $jans=Plan::where('month','Jan')->get();
          $febs=Plan::where('month','Feb')->get();
          $marchs=Plan::where('month','Mar')->get();
          $aprils=Plan::where('month','Apr')->get();
          $mays=Plan::where('month','May')->get();
          $junes=Plan::where('month','Jun')->get();
          $juls=Plan::where('month','Jul')->get();
          $augusts=Plan::where('month','Aug')->get();
          $septembers=Plan::where('month','Sep')->get();
          $octobers=Plan::where('month','Oct')->get();
          $novembers=Plan::where('month','Nov')->get();
          $decembers=Plan::where('month','Dec')->get();
         
            $plans=Plan::orderBy('name','asc')
            ->get();
          $messages= Message::get();
          $arts = media::where('mediatype', 'Logo')
          ->take(1)
          ->get();
           $lanews = News::orderBy('title','asc')
                            ->take(2)
                              ->get();
          $abouts = about::orderBy('title','asc')
             ->take(1)
             ->get();
         $leadermessages = leadermessage::orderBy('id','asc')
             ->take(2)
             ->get();
          return view('front.pages.plan_actpage',compact('plans','jans','febs','marchs','aprils','mays','junes','juls','augusts','septembers','octobers','novembers','decembers','news','arts','messages','articles','lanews','abouts','leadermessages'));

       }
       
       
       
      
       

        public function Viewabout($id){
                 $about=About::find($id);
                $arts = media::where('mediatype', 'Logo')
          ->take(1)
          ->get();
          $messages= Message::get();
          $lanews = News::orderBy('title','asc')
                            ->take(2)
                              ->get();
                 return view('front.pages.allabout',compact('about','arts','messages','lanews'));
                 

              }
              
              
              
              
              
              
              
              
              
              
              
              
              public function Contact(){
      $messages = Message::orderBy('id','asc')
                                ->take(3)
                                ->get();
      $news = News::orderBy('title','asc')
                            ->take(3)
                              ->get();
       $lanews = News::orderBy('title','asc')
                            ->take(2)
                              ->get();
      $abouts = about::orderBy('title','asc')
          ->take(1)
          ->get();
         
     $arts = media::where('mediatype', 'Logo')
          ->take(1)
          ->get();
     $articles = article::where('type', 'Featured news')
          ->take(1)
          ->get();
      $Notifications = dember::where('date', '>=', Carbon::now()->toDateString())
        ->where('status', 'Enabled')->get()->take(1);
// dd($Notifications);
      return view('front.pages.contact',compact('messages','arts','news','abouts','articles','Notifications','lanews'));
   }


   public function Download(){
    $resources = resource::where('type','Downloads')
                              
                              ->get();
    $news = News::orderBy('title','asc')
                          ->take(3)
                            ->get();
     $lanews = News::orderBy('title','asc')
                          ->take(2)
                            ->get();
    $abouts = about::orderBy('title','asc')
        ->take(1)
        ->get();
       
   $arts = media::where('mediatype', 'Logo')
        ->take(1)
        ->get();
   $articles = article::where('type', 'Featured news')
        ->take(1)
        ->get();
    $Notifications = dember::where('date', '>=', Carbon::now()->toDateString())
      ->where('status', 'Enabled')->get()->take(1);
// dd($Notifications);
    return view('front.pages.download',compact('resources','messages','arts','news','abouts','articles','Notifications','lanews'));
 }

 public function Resource(){
  $resources = resource::where('type','Library')
                            
                            ->get();
  $news = News::orderBy('title','asc')
                        ->take(3)
                          ->get();
   $lanews = News::orderBy('title','asc')
                        ->take(2)
                          ->get();
  $abouts = about::orderBy('title','asc')
      ->take(1)
      ->get();
     
 $arts = media::where('mediatype', 'Logo')
      ->take(1)
      ->get();
 $articles = article::where('type', 'Featured news')
      ->take(1)
      ->get();
  $Notifications = dember::where('date', '>=', Carbon::now()->toDateString())
    ->where('status', 'Enabled')->get()->take(1);
// dd($Notifications);
  return view('front.pages.download',compact('resources','messages','arts','news','abouts','articles','Notifications','lanews'));
}

public function Committe(){
  $committes = Committe::orderby('id','asc')
                            
                            ->get();
  $news = News::orderBy('title','asc')
                        ->take(3)
                          ->get();
   $lanews = News::orderBy('title','asc')
                        ->take(2)
                          ->get();
  $abouts = about::orderBy('title','asc')
      ->take(1)
      ->get();
     
 $arts = media::where('mediatype', 'Logo')
      ->take(1)
      ->get();
 $articles = article::where('type', 'Featured news')
      ->take(1)
      ->get();
  $Notifications = dember::where('date', '>=', Carbon::now()->toDateString())
    ->where('status', 'Enabled')->get()->take(1);
// dd($Notifications);
  return view('front.pages.committe',compact('committes','messages','arts','news','abouts','articles','Notifications','lanews'));
}
              
              
              
              
              
              
                
              public function President(){
                  $pastpres=pastpre::get();
      $messages = Message::orderBy('id','asc')
                                ->take(3)
                                ->get();
      $news = News::orderBy('title','asc')
                            ->take(3)
                              ->get();
       $lanews = News::orderBy('title','asc')
                            ->take(2)
                              ->get();
      $abouts = about::orderBy('title','asc')
          ->take(1)
          ->get();
         
    $arts = media::where('mediatype', 'Logo')
          ->take(1)
          ->get();
     $articles = article::where('type', 'Featured news')
          ->take(1)
          ->get();
      $Notifications = dember::where('date', '>=', Carbon::now()->toDateString())
        ->where('status', 'Enabled')->get()->take(1);
      return view('front.pages.president',compact('messages','arts','news','abouts','articles','Notifications','lanews','pastpres'));
   }


   public function Project(){
    $projects=project::get();
$messages = Message::orderBy('id','asc')
                  ->take(3)
                  ->get();
$news = News::orderBy('title','asc')
              ->take(3)
                ->get();
$lanews = News::orderBy('title','asc')
              ->take(2)
                ->get();
$abouts = about::orderBy('title','asc')
->take(1)
->get();

$arts = media::where('mediatype', 'Logo')
->take(1)
->get();
$articles = article::where('type', 'Featured news')
->take(1)
->get();
$Notifications = dember::where('date', '>=', Carbon::now()->toDateString())
->where('status', 'Enabled')->get()->take(1);
return view('front.pages.project',compact('projects','messages','arts','news','abouts','articles','Notifications','lanews','pastpres'));
}




    public function Council(){
        
         $councils= council::get();
                
      $messages = Message::orderBy('id','asc')
                                ->take(3)
                                ->get();
      $news = News::orderBy('title','asc')
                            ->take(3)
                              ->get();
       $lanews = News::orderBy('title','asc')
                            ->take(2)
                              ->get();
      $abouts = about::orderBy('title','asc')
          ->take(1)
          ->get();
         
     $arts = media::where('mediatype', 'Logo')
          ->take(1)
          ->get();
     $articles = article::where('type', 'Featured news')
          ->take(1)
          ->get();
      $Notifications = dember::where('date', '>=', Carbon::now()->toDateString())
        ->where('status', 'Enabled')->get()->take(1);
      return view('front.pages.council',compact('messages','arts','news','abouts','articles','Notifications','lanews','councils'));
   }




              
              
              
                
    public function Organization(){
        
        
       
        $Rotract_organizations = organization::where('org_type', 'Rotract')
                                            ->get();
         $Rotary_organizations = organization::where('org_type', 'Rotary')
                                            ->get();
        $Intract_organizations = organization::where('org_type', 'Intract')
                                            ->get();
        $RDC_organizations = organization::where('org_type', 'RDC')
                                            ->get();
          
                
      $messages = Message::orderBy('id','asc')
                                ->take(3)
                                ->get();
      $news = News::orderBy('title','asc')
                            ->take(3)
                              ->get();
       $lanews = News::orderBy('title','asc')
                            ->take(2)
                              ->get();
      $abouts = about::orderBy('title','asc')
          ->take(1)
          ->get();
         
     $arts = media::where('mediatype', 'Logo')
          ->take(1)
          ->get();
     $articles = article::where('type', 'Featured news')
          ->take(1)
          ->get();
      $Notifications = dember::where('date', '>=', Carbon::now()->toDateString())
        ->where('status', 'Enabled')->get()->take(1);
      return view('front.pages.organization',compact('messages','arts','news','abouts','articles','Notifications','lanews','Rotract_organizations','Rotary_organizations','Intract_organizations','RDC_organizations'));
   }

              
              
              
              
          
     public function Gallery(){
         $photos = media::where('mediatype', 'Gallery')
          ->get();
        $bulletins= bulletin::get();
         $councils= council::get();
                
      $messages = Message::orderBy('id','asc')
                                ->take(3)
                                ->get();
      $news = News::orderBy('title','asc')
                            ->take(3)
                              ->get();
       $lanews = News::orderBy('title','asc')
                            ->take(2)
                              ->get();
      $abouts = about::orderBy('title','asc')
          ->take(1)
          ->get();
         
     $arts = media::where('mediatype', 'Logo')
          ->take(1)
          ->get();
     $articles = article::where('type', 'Featured news')
          ->take(1)
          ->get();
      $Notifications = dember::where('date', '>=', Carbon::now()->toDateString())
        ->where('status', 'Enabled')->get()->take(1);
      return view('front.pages.gallery',compact('messages','arts','news','abouts','articles','Notifications','lanews','councils','bulletins','photos'));
   }
          
              
              
              
              
              



}
