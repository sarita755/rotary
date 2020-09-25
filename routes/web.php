<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\article;
Route::get('/', function () {
    dd('Testing');
});

Route::get('/admin', function () {
    return view('welcome');
});
Route::get('/datatable', function () {
  return view('front.pages.datatable');
});



                        //  setting
    Route::get('setting','SettingController@View')->name('setting');  
    Route::post('storesetting','SettingController@Store')->name('storesetting');
    Route::get('edit-setting/{$id}','SettingController@Edit')->name('edit-setting'); 
      
      
      

         Route::post('storefaq','UserController@Storefaq')->name('storefaq');
         Route::get('managefaq','UserController@Managefaq')->name('managefaq');
         Route::get('delete-faq/{id}','UserController@Deletefaq')->name('delete-faq');
         Route::get('getfaq','UserController@Faq')->name('getfaq'); 
                 

         Route::get('gallery','UserController@Gallery')->name('gallery');
         Route::get('index','UserController@Index')->name('index');

           Route::get('organization','UserController@Organization')->name('organization');
           Route::get('getcouncil','UserController@Council')->name('getcouncil');
            Route::get('president','UserController@President')->name('president');
           Route::get('getplan','UserController@ViewPlan')->name('getplan');
            Route::get('contact','UserController@Contact')->name('contact');
            Route::get('getriintro','UserController@ViewRi')->name('getriintro');
           
        Route::get('getintro','UserController@ViewIntro')->name('getintro'); 
        Route::get('getmessage','UserController@ViewMessage')->name('getmessage');
        Route::get('download','UserController@Download')->name('download');
        Route::get('resource','UserController@Resource')->name('resource');
        Route::get('project','UserController@Project')->name('project');
        Route::get('committe','UserController@Committe')->name('committe');
        Route::get('singlemember/{id}', 'SingleMemberController@viewMember')->name('singlemember');
        Route::get('singlemessage/{id}', 'SingleMessageController@viewMessage')->name('singlemessage');
        Route::get('singleproject/{id}', 'SingleProjectController@viewProject')->name('singleproject');
        Route::get('messagesingle/{id}', 'MessageSingleController@viewMessage')->name('messagesingle');


                          //contact

Route::get('viewcontact','ContactController@ViewContact')->name('viewcontact');
Route::post('storecontact','ContactController@Store')->name('storecontact');
Route::get('delete-contact/{id}','ContactController@Delete')->name('delete-contact');
Route::get('edit-contact/{id}','ContactController@Edit')->name('edit-contact');
Route::put('update-contact/{id}','ContactController@Update')->name('update-contact');

                         //Councils 
Route::get('managecouncil','CouncilController@View')->name('managecouncil'); 
Route::get('edit-council/{id}','CouncilController@Edit')->name('edit-council');
Route::post('storecouncil','CouncilController@Store')->name('storecouncil');
Route::get('delete-council/{id}','CouncilController@Delete')->name('delete-council');
Route::put('update-council/{id}','CouncilController@Update')->name('update-council');
  
              //Plan
   Route::get('manageplan','PlanController@View')->name('manageplan');   
   Route::post('storeplan','PlanController@Store')->name('storeplan'); 
   Route::get('edit-plan/{$id}','PlanController@Edit')->name('edit-plan/{$id}'); 


Route::get('manageplanofaction','ActionController@ManagePlan')->name('manageplanofaction');

Route::post('storeplanofaction','ActionController@StorePlan')->name('storeplanofaction');
Route::get('delete-planofaction/{id}','ActionController@Delete')->name('delete-planofaction');
Route::get('edit-planofaction/{id}','ActionController@Edit')->name('edit-planofaction');
Route::put('updateplanofaction/{id}','ActionController@Update')->name('updateplanofaction');



                 //organization
                 
 Route::get('manageorganization','OrganizationController@View')->name('manageorganization');  
  Route::get('edit-organization/{id}','OrganizationController@Edit')->name('edit-organization');
  Route::post('storeorganization','OrganizationController@Store')->name('storeorganization');  
   Route::get('delete-organization/{id}','OrganizationController@Delete')->name('delete-organization');
   Route::put('updateorganization/{id}','OrganizationController@Update')->name('updateorganization');
   
 
   
   


     //bulletin
     

 Route::get('managebusiness','BulletinController@View')->name('managebusiness');
  Route::post('storebulletin','BulletinController@Store')->name('storebulletin');
  Route::get('edit-bulletin/{id}','BulletinController@Edit')->name('edit-bulletin'); 
  Route::put('update-bulletin/{id}','BulletinController@Update')->name('update-bulletin'); 
  Route::get('delete-bulletin/{id}','BulletinController@Delete')->name('delete-bulletin'); 
  
  
           //president
   Route::get('managepesident','PresidentController@View')->name('managepesident'); 
   Route::post('storepresident','PresidentController@Store')->name('storepresident');
   Route::get('edit-pesident/{id}','PresidentController@Edit')->name('edit-pesident');
   Route::put('update-pastpre/{id}','PresidentController@Update')->name('update-pastpre');
   
   
   Route::get('delete-presient/{id}','PresidentController@Delete')->name('delete-presient');
   

 //pastpresidentcouncil
 Route::get('managepastpresidentcouncil','PastPresidentController@View')->name('managepastpresidentcouncil'); 
 Route::post('storepastpresidentcouncil','PastPresidentController@Store')->name('storepastpresidentcouncil');
 Route::get('edit-pastpresidentcouncil/{id}','PastPresidentController@Edit')->name('edit-pastpresidentcouncil');
 Route::put('update-pastpresidentcouncil/{id}','PastPresidentController@Update')->name('update-pastpresidentcouncil');
 Route::get('delete-pastpresidentcouncil/{id}','PastPresidentController@Delete')->name('delete-pastpresidentcouncil');   
    
   
   
         //notification
   
   Route::post('storenotification','NotificationController@Store')->name('storenotification');

 Route::get('delete-notification/{id}','NotificationController@Delete')->name('delete-notification'); 
  Route::get('managenotification','NotificationController@ManageNotification')->name('managenotification'); 
  
  
 Route::get('edit-notification/{id}','NotificationController@Edit')->name('edit-notification');
 Route::put('update-notification/{id}','NotificationController@Update')->name('update-notification');
  
                     //About Us

 Route::get('view-about/{id}','UserController@Viewabout')->name('view-about');
 Route::post('storeabout','AboutController@StoreAbout')->name('storeabout');
 Route::get('manageabout','AboutController@ManageAbout')->name('manageabout');
 Route::get('delete-about/{id}','AboutController@Delete')->name('delete-about'); 
 Route::get('edit-about/{id}','AboutController@Edit')->name('edit-about');
 Route::put('update-about/{id}','AboutController@Update')->name('update-about');

Route::get('getmember','MemberController@GetMember')->name('getmember');


  
  
  
               


                          //Bod
Route::get('managebod','BODController@ViewBod')->name('managebod');
Route::post('storebod','BODController@Store')->name('storebod');
Route::get('edit-bod/{id}','BODController@Edit')->name('edit-bod');
Route::put('updatebod/{id}','BODController@Update')->name('updatebod');
 Route::get('delete-bod/{id}','BODController@Delete')->name('delete-bod');
Route::get('getbod','BODController@GetBod')->name('getbod');

Route::get('/message', function () {
    return view('front.pages.messagepage');
});

Route::get('view-message/{id}','UserController@ViewMessage')->name('view-message');
Route::get('view-news/{id}','UserController@Viewnews')->name('view-news');
Route::get('view-article/{id}','UserController@ViewArticle')->name('view-article');

           
 

 //
 Route::get('/','UserController@index')->name('/');


Route::get('viewtesting','TestController@index')->name('viewtesting');
Route::get('testadd','TestController@Store')->name('testadd');

Route::get('admin','DashboardController@Admin')->name('admin');
Route::get('managearticle','ArticleController@ManageArticle')->name('managearticle');
//Route::get('edit-article/{id}','ArticleController@Edit')->name('edit-article');

Route::post('storearticle','ArticleController@StoreArticle')->name('storearticle');
Route::get('delete-article/{id}','ArticleController@Delete')->name('delete-article');
Route::get('edit-article/{id}','ArticleController@Edit')->name('edit-article');
Route::put('updatearticle/{id}','ArticleController@Update')->name('updatearticle');

                          //media
Route::get('managemedia','MediaController@ManageMedia')->name('managemedia');
Route::post('storemedia','MediaController@Store')->name('storemedia');
Route::get('delete-media/{id}','MediaController@Delete')->name('delete-media');
Route::get('edit-media/{id}','MediaController@Edit')->name('edit-media');
Route::put('update-media/{id}','MediaController@Update')->name('update-media');


                           //Managemember
Route::get('managemember','MemberController@ManageMember')->name('managemember');
Route::post('storemember','MemberController@Store')->name('storemember');
Route::get('delete-member/{id}','MemberController@Delete')->name('delete-member');
Route::get('edit-member/{id}','MemberController@Edit')->name('edit-member');
Route::put('update-member/{id}','MemberController@Update')->name('update-member');

                            //Manageleadermessage
Route::get('manageleadermessage','LeadermessageController@Managemessage')->name('manageleadermessage');
Route::post('storeleadermessage','LeadermessageController@Store')->name('storeleadermessage');
Route::get('delete-leadermessage/{id}','LeadermessageController@Delete')->name('delete-message');
Route::get('edit-leadermessage/{id}','LeadermessageController@Edit')->name('edit-message');
Route::put('update-leadermessage/{id}','LeadermessageController@Update')->name('update-message');




                       //Message
Route::get('viewmessage','MessageController@ViewMessage')->name('viewmessage');
Route::post('storemessage','MessageController@Store')->name('storemessage');
Route::get('delete-message/{id}','MessageController@Delete')->name('delete-message');
Route::get('edit-message/{id}','MessageController@Edit')->name('edit-message');
Route::put('update-message/{id}','MessageController@Update')->name('update-message');

Route::get('test','testController@View')->name('test');

                          //News
Route::get('viewnews','NewsController@ViewNews')->name('viewnews');
Route::post('storenews','NewsController@Store')->name('storenews');
Route::get('edit-news/{id}','NewsController@Edit')->name('edit-news');
Route::get('delete-news/{id}','NewsController@Delete')->name('delete-news');
Route::put('update-news/{id}','NewsController@Update')->name('update-news');
Route::get('getnews','NewsController@GetNews')->name('getnews');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

                         //file
Route::get('viewfile','FileController@ViewFile')->name('viewfile');
Route::post('storefile','FileController@Store')->name('storefile');
Route::get('delete-file/{id}','FileController@Delete')->name('delete-file');
Route::get('edit-file/{id}','FileController@Edit')->name('edit-file');
Route::put('update-file/{id}','FileController@Update')->name('update-file');
Route::get('view/{id}','FileController@View')->name('view');

                         //Theme
Route::get('managetheme','ThemeController@ManageTheme')->name('managetheme');
Route::post('storetheme','ThemeController@StoreTheme')->name('storetheme');
Route::delete('theme/{id}','ThemeController@Delete')->name('delete-theme');
Route::get('edit-theme/{id}','ThemeController@Edit')->name('edit-theme');
Route::put('updatetheme/{id}','ThemeController@Update')->name('updatetheme');

                         //Resource
Route::get('manageresource','ResourceController@ManageResource')->name('manageresource');
Route::post('storeresource','ResourceController@StoreResource')->name('storeresource');
Route::get('delete-resource/{id}','ResourceController@Delete')->name('delete-resource');
Route::get('edit-resource/{id}','ResourceController@Edit')->name('edit-resource');
Route::put('updateresource/{id}','ResourceController@Update')->name('updateresource');
Route::get('download/{file}','ResourceController@download');


                           //Committe
Route::get('managecommitte','CommitteController@managecommitte')->name('managecommitte');
Route::post('storecommitte','CommitteController@storecommitte')->name('storecommitte');
Route::get('delete-committe','CommitteController@Delete')->name('delete-committe');
Route::get('edit-committe/{id}','CommitteController@Edit')->name('edit-committe');
Route::put('update-committe/{id}','CommitteController@Update')->name('update-committe');
 
                             //profiles
Route::get('manageprofile','ProfileController@ManageProfile')->name('manageprofile');
Route::post('storeprofile','ProfileController@StoreProfile')->name('storeprofile');
Route::get('delete-profile/{id}','ProfileController@Delete')->name('delete-profile');
Route::get('edit-Profile/{id}','ProfileController@Edit')->name('edit-profile');
Route::put('updateprofile/{id}','ProfileController@Update')->name('updateprofile');

                            //projects
Route::get('manageproject','ProjectController@ManageProject')->name('manageproject');
Route::post('storeproject','ProjectController@StoreProject')->name('storeproject');
Route::get('delete-project/{id}','ProjectController@Delete')->name('delete-project');
Route::get('edit-project/{id}','ProjectController@Edit')->name('edit-project');
Route::put('updateproject/{id}','ProjectController@Update')->name('updateproject');
                             