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

Route::get('/', function () {
    return view('welcome');
   
});

// conncetion from index page to all other main pages when a user views from outside. ie with out logging in

Route::get("/welcome","home@homepage");
Route::get("/about","aboutController@aboutpage");
Route::get("/classified","classifiedController@classifiedpage");
Route::get("/classified_database","cdatabaseController@cdbpage");
Route::get("/news","newsController@newspage");
Route::get("/article","articleController@articlepage");
Route::get("/forum","forumController@forumpage");
Route::get("/videos","videoController@videopage");
Route::get("/contact","contactController@contactpage");
Route::get("/mainheader","mainHeaderController@mainHeaderpage");
Route::get("/logout","logoutController@logoutUser");



//--------------------------------DATA INSERTION FROM THE FRONT PAGES------------------------------------------//
/*contact page insertion on database contact.blade.php*/
Route::post('/create','contactController@insert');//contactform
Route::post('/createlogin','mainHeaderController@insertlogin');//registration form
Route::post('/createlogins','mainHeaderController@userlogin');//logiinform
Route::get("/loginerror","mainHeaderController@logerror");



//--------------------------------END DATA INSERTION FROM THE FRONT PAGES------------------------------------//


///////------------------------------------------admin pages-----------------------------------------------//
// connection of pages under admin panel//

Route::get("/admin_home","adminHomePageController@adminHomePage");
Route::get("/personal_admin","personalAdminController@personaladmin");
Route::get("/notification","notificationAdminController@notificationadminview");
Route::get("/inbox_admin","inboxAdminController@inboxadmin");
Route::get("/admin_view_members","adminViewMembersController@adminviewmember");
Route::get("/admin_view_volunteer","adminViewVolunteerController@adminViewVolunteer");
Route::get("/admin_approve_volunteer","adminApproveVolunteerController@adminapprovevolunteer");
Route::get("/admin_view_work","adminViewWorkController@adminviewwork");
Route::get("/admin_add_work","adminAddWorkController@adminaddwork");
Route::get("/admin_create_group","adminCreateGroupController@adminaddgroup");
Route::get("/admin_emergency_message","adminEmergencyMessageController@adminemergencymessage");
Route::get("/about_admin","adminaboutController@adminabout");
Route::get("/admin_dialogue_session","admindialoguesessionController@admindialogue");
Route::get("/admin_header","adminHeaderController@adminHeaderPage");
Route::get("/view_resume/{id}","resumeController@getDownload");
Route::get("/admin_user_approval/{id}","userApprovalController@acceptuser");
Route::get("/admin_user_reject/{id}","userRejectController@disableuser");








// ADMIN INSERTIONS//
Route::post('/creatework','adminAddWorkController@insert');//admin add work
Route::post('/create','notificationAdminController@insert');//admin add notification
Route::get("/admin_header","adminHeaderController@getusername");
Route::post("/adminnewsfeed","adminHomePageController@adminnewsfeed");
Route::post("/admin_user_review","adminApproveVolunteerController@userreview");
//Route::get('/admin_user_accept/'.{{ $datas->lid }}',"adminuseracceptcontroller@userapproval");








///-------------------------------------------pages of member------------------------------------------------//
// pages from member home 

Route::get("/member_home","memberHomeController@memberhomepage");
Route::get("/personal_member","personelMemberController@personelmemberpage");
Route::get("/notification_member","notificationMemberController@notificationmember");
Route::get("/inbox_member","inboxMemberController@inboxmember");
Route::get("/member_view_members","memberViewMemberController@memberviewmember");
Route::get("/member_view_volunteer","memberViewVolunteerController@memberviewvolunteer");
Route::get("/member_view_work","memberViewWorkController@memberviewwork");
Route::get("/member_view_group","memberViewGroupController@memberviewgroup");
Route::get("/member_emergency_message","memberEmergencyMessageController@memberemergencymessage");
Route::get("/about_member","memberaboutController@memberabout");
Route::get("/member_dialogue_session","memberdialoguesessionController@memberdialogesession");



Route::post("/membernewsfeed","memberHomeController@membernewsfeed");
Route::post("/pmembernewsfeed","personelMemberController@pmembernewsfeed");



///--------------------------------------------------pages of volumteer-------------------------///
//pages from voluntere home

Route::get("/volunteer_home","volunteerHomeController@volunteerhome");
Route::get("/personal_volunteer","volunteerPersonalController@volunteerpersonal");
Route::get("/notification_volunteer","volunteerNotificationController@volunteernotification");
Route::get("/inbox_volunteer","volunteerInboxController@volunteerinbox");
Route::get("/about_volunteer","volunteeraboutController@volunteerabout");
Route::get("/volunteer_view_members","volunteerviewmemberController@volunteerviewmember");
Route::get("/volunteer_view_volunteer","volunteerviewvolunteerController@volunteerviewvolunteer");
Route::get("/volunteer_view_work","volunteerviewworkController@volunteerwork");
Route::get("/volunteer_view_group","volunteerviewGoupController@volunteergroup");
Route::get("/volunteer_emergency_message","volunteeremergencymessageController@volunteeremergency");



Route::post("/volnewsfeed","volunteerHomeController@volunteernewsfeed");

Route::post("/pvolnewsfeed","volunteerHomeController@pvolnewsfeed");









