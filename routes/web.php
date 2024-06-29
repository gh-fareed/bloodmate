<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\FindBloodController;
// use Illuminate\Contracts\Session\Session;

Route::get('/',
[FrontendController::class, 'index']);
Route::get('/login', [FrontendController::class, 'login']);
Route::get('/logout', [FrontendController   ::class, 'logout']);
Route::get('/register', [FrontendController::class, 'register']);
Route::get('/bbregister', [FrontendController::class, 'bbregister']);
Route::get('/donorquiz', [FrontendController::class, 'donorquiz']);
Route::get('/congratz', [FrontendController::class, 'showquiz']);
Route::get('/noteligible', [FrontendController::class, 'showquiz']);
Route::get('/contact', [FrontendController::class, 'contact']);
Route::get('/stories', [FrontendController::class, 'stories']);
Route::get('/faqbasic', [FrontendController::class, 'faqbasic']);
Route::get('/faq1', [FrontendController::class, 'faq1']);
Route::get('/faq2', [FrontendController::class, 'faq2']);
Route::get('/faq3', [FrontendController::class, 'faq3']);
Route::get('/faq4', [FrontendController::class, 'faq4']);
Route::get('/faq5', [FrontendController::class, 'faq5']);
Route::get('/faq6', [FrontendController::class, 'faq6']);
Route::get('/faq7', [FrontendController::class, 'faq7']);
Route::get('/faq8', [FrontendController::class, 'faq8']);
Route::get('/faq9', [FrontendController::class, 'faq9']);
Route::get('/faq10', [FrontendController::class, 'faq10']);
Route::get('/faq11', [FrontendController::class, 'faq11']);
Route::get('/faq12', [FrontendController::class, 'faq12']);
Route::get('/quizsubmitted', [FrontendController::class, 'quizsubmitted']);
Route::get('/showquiz/{q}/{ans}', [FrontendController::class, 'showquiz']);
Route::get('/findblood', [FrontendController::class, 'findblood']);


Route::get('/donationlocations', [FrontendController::class, 'donationlocations']);
Route::post('/dodonationlocations', [FrontendController::class, 'dodonationlocations']);
Route::get('/donordonated/{data}', [FrontendController::class, 'donordonated']);



Route::get('/stepone', [FrontendController::class, 'stepone']);
Route::get('/steptwo', [FrontendController::class, 'steptwo']);
Route::get('/stepthree', [FrontendController::class, 'stepthree']);
Route::get('/userprofiledisplay/{id}', [FrontendController::class, 'userprofiledisplay']);
Route::get('/contactcopy', [FrontendController::class, 'contactcopy']);
// Route::get('/bbdashboard', [FrontendController::class, 'bbdashboard']);
Route::get('/donorDashboard', [FrontendController::class, 'donorDashboard']);
Route::get('/donorProfile', [FrontendController::class, 'donorprofile']);
Route::get('/bbDashboard', [FrontendController::class, 'bbDashboard']);
Route::get('/bbprofile', [FrontendController::class, 'bbprofile']);
Route::get('/certifyuser', [FrontendController::class, 'certifyuser']);
Route::get('/certifybb', [FrontendController::class, 'certifybb']);
Route::get('/adminDashboard', [FrontendController::class, 'adminDashboard']);
Route::get('/makeCertify', [FrontendController::class, 'makeCertify']);
Route::get('/doapproved/{id}', [FrontendController::class, 'doapprove']);
Route::get('/dodisapproved/{id}', [FrontendController::class, 'dodisapprove']);
Route::get('/profilepicture', [FrontendController::class, 'profilepicture']);
Route::get('/bbprofilepicture', [FrontendController::class, 'bbprofilepicture']);
Route::get('/becomedonor', [FrontendController::class, 'becomedonor']);
Route::get('/becomerecepient', [FrontendController::class, 'becomerecepient']);


Route::post('/doregister', [FrontendController::class,'doregister']);
Route::post('/dologin', [FrontendController::class,'dologin']);
Route::post('/dodonorquiz', [FrontendController::class,'dodonorquiz']);
Route::post('/dobbregister', [FrontendController::class, 'dobbregister']);
Route::post('/findblood', [FrontendController::class, 'dosearchdb']);
Route::post('/doeditprofile', [FrontendController::class, 'doeditprofile']);
Route::post('/doeditbbprofile', [FrontendController::class, 'doeditbbprofile']);
Route::post('/docertify', [FrontendController::class, 'docertify']);
Route::post('/docertifybb', [FrontendController::class, 'docertifybb']);
Route::post('/doprofilepicture', [FrontendController::class, 'doprofilepicture']);
Route::post('/dobbprofilepicture', [FrontendController::class, 'dobbprofilepicture']);
Route::get('/reset-timer', [FrontendController::class, 'resetTimer']);
Route::get('/emergencyrequest', [FrontendController::class, 'emergencyrequest']);
Route::post('/requestblood', [FrontendController::class, 'requestblood']);
Route::get('/bloodrequests', [FrontendController::class, 'bloodrequests']);
Route::get('/rank', [FrontendController::class, 'rank']);
Route::get('/bbbloodrequests', [FrontendController::class, 'bbbloodrequests']);
Route::get('/bbappointmentrequests', [FrontendController::class, 'bbappointmentrequests']);
Route::get('/donorstory', [FrontendController::class, 'donorstory']);
Route::post('/savedonorstory', [FrontendController::class, 'savedonorstory']);
Route::get('/bbstories', [FrontendController::class, 'bbstories']);
Route::get('/bdrequest/{id}', [FrontendController::class, 'bdrequest']);
Route::get('/bdrequestd/{id}', [FrontendController::class, 'bdrequestd']);
Route::get('/opprequest/{id}', [FrontendController::class, 'opprequest']);
Route::get('/opprequestd/{id}', [FrontendController::class, 'opprequestd']);
Route::get('/rec_requests', [FrontendController::class, 'rec_requests']);

Route::get('/donoravailable', [FrontendController::class, 'donoravailable']);
Route::post('/dodonoravailable', [FrontendController::class, 'dodonoravailable']);
Route::post('/rating', [FrontendController::class, 'rating']);
Route::get("/deleterequests/{id}",[FrontendController::class, 'deleterequests']);
Route::get("/deleterequest/{id}",[FrontendController::class, 'deleterequest']);


Route::get('/blooddrive', [FrontendController::class, 'blooddrive']);
Route::post('/saveblooddrive', [FrontendController::class, 'saveblooddrive']);

// Admin Blood Drives
Route::get('/adminblooddrives', [FrontendController::class, 'adminblooddrives']);
Route::get('/admindoapproved/{id}', [FrontendController::class, 'admindoapprove']);
Route::get('/admindodisapproved/{id}', [FrontendController::class, 'admindodisapprove']);

Route::get("/received/{id}", [FrontendController::class, 'received']);
Route::get("/rec_history", [FrontendController::class, 'rec_history']);
Route::get("/donor_history", [FrontendController::class, 'donor_history']);

Route::get("/addinventory",[FrontendController::class,"addinventory"]);
Route::post("/saveinventory",[FrontendController::class,"saveinventory"]);
Route::get("/inventory",[FrontendController::class,"inventory"]);
Route::get("/editinventory/{id}",[FrontendController::class,"editinventory"]);
Route::get("/deleteinventory/{id}",[FrontendController::class,"deleteinventory"]);
Route::post("/updateinventory",[FrontendController::class,"updateinventory"]);
