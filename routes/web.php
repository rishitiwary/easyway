<?php

use App\Http\Controllers\Academics;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Ajax;
use App\Http\Controllers\Master;
use App\Http\Controllers\Student;
use App\Http\Controllers\Staff;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[Home::class,'index']);

//admin urls

Route::get('/userlogin',[Home::class,'userlogin']);
Route::get('/login',[Home::class,'login']);
Route::get('/forgotpassword',[Home::class,'forgotpassword']);
//admin prefix
Route::group(['prefix'=>'admin'],function(){
    Route::match(['get','post'],'/login',[Admin::class,'login']);  
Route::get('/dashboard',[Admin::class,'index']);
Route::get('/events',[Admin::class,'events']);
Route::match(['get', 'post'],'/events/create',[Admin::class,'eventcreate']);
Route::get('/gallery',[Admin::class,'gallery']);
Route::match(['get', 'post'],'/gallery/create',[Admin::class,'gallerycreate']);
Route::get('/notice',[Admin::class,'notice']);
Route::match(['get', 'post'],'/notice/create',[Admin::class,'noticecreate']);
Route::view('/media','admin.media');
Route::post('/media',[Admin::class,'media']);
Route::get('/banner',[Admin::class,'banner']);
Route::get('/banneraction',[Admin::class,'banneraction']);
Route::match(['get','post'],'/hostelroom',[Admin::class,'hostelroom']);
Route::match(['get','post'],'/roomtype',[Admin::class,'roomtype']);
Route::match(['get','post'],'/hostel',[Admin::class,'hostel']);
Route::match(['get','post'],'/batches',[Admin::class,'batches']);
Route::match(['get','post'],'/classes',[Admin::class,'classes']);
Route::match(['get','post'],'/subject',[Admin::class,'subject']);
Route::match(['get','post'],'/subjectgroup',[Admin::class,'subjectgroup']);
Route::match(['get','post'],'/staff',[Staff::class,'staff']);
Route::match(['get','post'],'/staff/create',[Staff::class,'staffCreate']);
Route::match(['get'],'/staff/profile',[Staff::class,'profile']);
Route::match(['get','post'],'/designation',[Staff::class,'designation']);
Route::match(['get','post'],'/department',[Staff::class,'department']);
Route::match(['get','post'],'/leavetypes',[Staff::class,'leavetype']);
Route::match(['get','post'],'/roles',[Staff::class,'roles']);
Route::match(['get','post'],'/payroll',[Staff::class,'payroll']);
Route::match(['post'],'/payroll/payslip',[Staff::class,'payslip']);
Route::match(['post'],'/payroll/paymentSuccess',[Staff::class,'paymentSuccess']);
Route::match(['get','post'],'/payroll/create/{month}/{year}/{id}',[Staff::class,'payrollCreate']);
Route::match(['get','post'],'/payroll/revert/{month}/{year}/{id}',[Staff::class,'payrollRevert']);
Route::get('/payroll/payslipView',[Staff::class,'payslipView']);
Route::match(['get','post'],'/staffattendance',[Staff::class,'attendance']);
Route::match(['get','post'],'/staff/leaverequest',[Staff::class,'leaverequest']);
Route::match(['post'],'/staff/changepassword',[Staff::class,'changepassword']);
Route::match(['get','post'],'/staff/approve_leaverequest',[Staff::class,'approve_leaverequest']);


});

//master prefix
Route::group(['prefix'=>'master'],function(){
    Route::match(['get'],'/tradegroup',[Master::class,'tradegroup']);
    Route::match(['get', 'post'],'/tradegroup/create',[Master::class,'tradegroupCreate']);
    Route::match(['get'],'/trade',[Master::class,'trade']);
    Route::match(['get', 'post'],'/trade/create',[Master::class,'tradeCreate']);
    Route::match(['get'],'/subject',[Master::class,'subject']);
    Route::match(['get', 'post'],'/subject/create',[Master::class,'subjectCreate']);
    Route::match(['get'],'/chapter',[Master::class,'chapter']);
    Route::match(['get', 'post'],'/chapter/create',[Master::class,'chapterCreate']);
    Route::match(['get'],'/topic',[Master::class,'topic']);
    Route::match(['get', 'post'],'/topic/create',[Master::class,'topicCreate']);
    Route::match(['get'],'/videolibrary',[Master::class,'videolibrary']);
    Route::match(['get', 'post'],'/videolibrary/create',[Master::class,'videolibraryCreate']);
    Route::match(['get'],'/videolibrary/read',[Master::class,'videolibraryview']);
    Route::match(['get'],'/studymaterials',[Master::class,'studymaterials']);
    Route::match(['get', 'post'],'/studymaterial/create',[Master::class,'studymaterialsCreate']);
  
   
});
//student
Route::group(['prefix'=>'student'],function(){
    Route::get('/create',[Student::class,'create']);
 
});
//end student routes

//ajax prefix
Route::group(['prefix'=>'ajax'],function(){
    Route::get('/getmedia',[Ajax::class,'getmedia']);
    Route::get('/media',[Ajax::class,'media']);
    Route::get('/trade',[Ajax::class,'trade']);
    Route::get('/subject',[Ajax::class,'subject']);
    Route::get('/chapter',[Ajax::class,'chapter']);
    Route::get('/topic',[Ajax::class,'topic']);
    Route::get('/batches',[Ajax::class,'batches']);
});
