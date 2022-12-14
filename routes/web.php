<?php

use App\Http\Controllers\Academics;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Ajax;
use App\Http\Controllers\Chat;
use App\Http\Controllers\Master;
use App\Http\Controllers\Student;
use App\Http\Controllers\Staff;
use App\Http\Controllers\Course;
use App\Http\Controllers\RazorpayPaymentController;
use App\Http\Controllers\Exam;
use App\Http\Controllers\InterviewController;
use App\Http\Controllers\User;
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

//admin urls


Route::get('/login',[Home::class,'login']);
Route::get('/forgotpassword',[Home::class,'forgotpassword']);

//admin prefix
Route::group(['prefix'=>'user','middleware'=>'checkAdmin'],function(){
    Route::get('/studentcourse',[User::class,'index']);
    Route::get('/onlinetest',[User::class,'onlinetest']);
    Route::get('/onlineexam/view/{id}',[User::class,'onlinetest_view']);
    Route::get('/startexam/{id}',[User::class,'startexam']);
    Route::match(['get','post'],'/teacher-review',[User::class,'teacher_review']);
});
//admin prefix
Route::group(['prefix'=>'admin','middleware'=>'checkAdmin'],function(){
 Route::match(['get','post'],'course-category',[Course::class,'course_category']);
Route::get('/',[Admin::class,'index']);
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
Route::match(['get','post'],'/roles/permission',[Admin::class,'permission']);
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
Route::get('/logout',[Admin::class,'logout']);
Route::match(['get','post'],'/general_settings',[Admin::class,'general_settings']);
Route::match(['get','post'],'/disable_reason',[Admin::class,'disable_reason']);
Route::get('position',[Ajax::class,'position']);
Route::match(['get','post'],'menu',[Admin::class,'menu']);
Route::match(['get','post'],'submenu',[Admin::class,'submenu']);

//end admin
Route::get('course',[Course::class,'index']);
Route::match(['get','post'],'addcourse',[Course::class,'addcourse']);
Route::get('addcontent/{id}',[Course::class,'addcontent']);
Route::post('createfolder',[Course::class,'createfolder']);
Route::post('adddocument',[Course::class,'adddocument']);
Route::post('subfolder',[Course::class,'subfolder']);
Route::get('viewcontents/{id}',[Course::class,'viewcontents']);
Route::get('importcontents/{id}',[Course::class,'importcontents']);
Route::post('import',[Course::class,'import']);
Route::match(['get','post'],'onlineexam',[Exam::class,'index']);
Route::match(['get','post'],'question',[Exam::class,'question']);
Route::get('/users',[Admin::class,'users']);
Route::get('/users/staff',[Admin::class,'usersStaff']);
Route::get('/users/changeStatus',[Admin::class,'usersChangeStatus']);
Route::match(['get','post'],'/demovideo/{id}',[Course::class,'demovideo']);
Route::get('pages',[Admin::class,'pages']);
Route::match(['get','post'],'page/create',[Admin::class,'pagesCreate']);
Route::match(['get','post'],'video-gallery',[Admin::class,'video_gallery']);

});
Route::match(['get','post'],'/admin/login',[Admin::class,'login']);  
//master prefix
Route::group(['prefix'=>'master','middleware'=>'checkAdmin'],function(){
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
    Route::match(['get', 'post'],'/feetype',[Master::class,'feetype']);
    Route::match(['get', 'post'],'/feegroup',[Master::class,'feegroup']);
    Route::match(['get', 'post'],'/feediscount',[Master::class,'feediscount']);
    Route::match(['get', 'post'],'/feediscount/assign/{id}',[Master::class,'feediscount_assign']);
    Route::match(['get', 'post'],'/feemaster',[Master::class,'feemaster']);
    Route::match(['get', 'post'],'/feemaster/assign/{id}',[Master::class,'feemaster_assign']);
    Route::match(['get','post'],'calendar/events',[Master::class,'calendar_events']);


});
//student
Route::group(['prefix'=>'student','middleware'=>'checkAdmin'],function(){
    Route::match(['get','post'],'/create',[Student::class,'create']);
    Route::match(['get','post'],'/search',[Student::class,'search']);
    Route::get('/view/{id}',[Student::class,'view']);
    Route::match(['get','post'],'/disable_reason',[Student::class,'disable_reason']);
    Route::match(['get','post'],'/disablestudentslist',[Student::class,'disablestudentslist']);
    Route::get('/onlinestudent',[Student::class,'onlinestudent']);
    Route::get('/edit/{id}',[Student::class,'edit']);
    Route::match(['get','post'],'/multiclass',[Student::class,'multiclass']);
    Route::post('savemulticlass',[Student::class,'savemulticlass']);
    Route::match(['get','post'],'bulkdelete',[Student::class,'bulkdelete']);
    Route::match(['get','post'],'studentfee',[Student::class,'studentfee']);
    Route::match(['get','post'],'searchpayment',[Student::class,'searchpayment']);
    Route::match(['get','post'],'feesearch',[Student::class,'feesearch']);
    Route::match(['get','post'],'feesforward',[Student::class,'feesforward']);
    Route::match(['get','post'],'feereminder',[Student::class,'feereminder']);
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
    Route::get('/class_batches',[Ajax::class,'class_batches']);
    Route::get('/gettrades',[Ajax::class,'gettrades']);
    Route::get('/hostel_room',[Ajax::class,'hostel_room']);
    Route::get('/district',[Ajax::class,'district']);
    Route::get('/studentsearch',[Ajax::class,'studentsearch']);
    Route::get('/addvideo',[Ajax::class,'addvideo']);
    Route::get('/update_doc_status',[Ajax::class,'update_doc_status']);
    Route::get('/update_video_status',[Ajax::class,'update_video_status']);
    Route::get('/dynamic_folder',[Ajax::class,'dynamic_folder']);
    Route::get('/dynamic_contents',[Ajax::class,'dynamic_contents']);
    Route::get('/dynamic_folder_import',[Ajax::class,'dynamic_folder_import']);
    Route::get('/update_order',[Ajax::class,'update_order']);
    Route::get('/questions',[Ajax::class,'questions']);
});
Route::group(['prefix'=>'exam','middleware'=>'checkAdmin'],function(){
    Route::match(['get','post'],'/addquestion',[Exam::class,'addquestion']);
    Route::post('/bulkdelete',[Exam::class,'bulkdelete']);
    Route::match(['get','post'],'/onlineexam/assign/{id}',[Exam::class,'assignexam']);
    Route::match(['get','post'],'/onlineexam/addquestion/{id}',[Exam::class,'assignexam_addquestion']);
    Route::match(['get','post'],'/examquestion',[Exam::class,'examquestion']);
    Route::match(['get','post'],'/addExamQuestion',[Exam::class,'addExamQuestion']);
    Route::match(['get','post'],'/ajax_addexam',[Exam::class,'ajax_addexam']);
    Route::match(['get'],'/getExamQuestions',[Exam::class,'getExamQuestions']);
    Route::match(['get'],'/onlineexam/printexam/{id}',[Exam::class,'printexam']);
    Route::match(['get','post'],'/addexam/{id}',[Exam::class,'course_addexam']);
    Route::post('/submit_exam',[Exam::class,'submit_exam']);
});

Route::group(['prefix'=>'chat','middleware'=>'checkAdmin'],function(){
    Route::get('/',[Chat::class,'index']);
    Route::get('/all',[Chat::class,'all']);
    Route::get('/searchuser',[Chat::class,'searchuser']);
    Route::get('/adduser',[Chat::class,'adduser']);
    Route::get('/myuser',[Chat::class,'myuser']);
    Route::post('/getChatsUpdates',[Chat::class,'getChatsUpdates']);
    Route::post('/getChatRecord',[Chat::class,'getChatRecord']);
    Route::post('/newMessage',[Chat::class,'newMessage']);
    Route::post('/chatUpdate',[Chat::class,'chatUpdate']);
    Route::post('/getChatNotification',[Chat::class,'getChatNotification']);
});
//home urls
Route::get('/',[Home::class,'index']);
Route::match(['get','post'],'/userlogin',[Home::class,'userlogin']);
Route::post('/registration',[Home::class,'registration']);
Route::get('/online_admission_review',[Home::class,'online_admission_review'])->middleware('loginCheck');
Route::get('/online_admission_review/{id}',[Home::class,'online_admission_print']);
Route::match(['get','post'],'/editonlineadmission',[Home::class,'editonlineadmission'])->middleware('loginCheck');
Route::get('/onlineadmission/checkout',[Home::class,'onlineadmission_checkout'])->middleware('loginCheck');
Route::get('/course/details/{id}',[Course::class,'details']);
Route::get('/course/startlesson/{id}',[Course::class,'startlesson']);
Route::match(['get','post'],'course_payment/payment/{id}',[RazorpayPaymentController::class,'coursePayment'])->middleware('checkAdmin');
Route::post('payment/checkout', [RazorpayPaymentController::class, 'index']);
Route::post('payment/response', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');
Route::get('payment/response', [RazorpayPaymentController::class, 'response']);
 

Route::group(['prefix'=>'interview'],function(){
    Route::match(['get','post'],'/',[InterviewController::class,'index']);
    Route::post('/bucket_size',[InterviewController::class,'bucket_size']);
    Route::post('/balls_size',[InterviewController::class,'balls_size']);
    Route::post('/ball_in_bucket',[InterviewController::class,'ball_in_bucket']);
});
Route::post('/contact-us-submit',[Home::class,'contact_us_submit']);
Route::get('/image-gallery',[Home::class,'gallery']);
Route::get('/video-gallery',[Home::class,'gallery']);
Route::get('/govt-jobs',[Home::class,'pages']);
Route::get('/apprenticeship',[Home::class,'pages']);
Route::get('/syllabus',[Home::class,'pages']);
Route::get('/latest-news',[Home::class,'pages']);
Route::get('/important-links',[Home::class,'pages']);
Route::get('/private-job',[Home::class,'pages']);
Route::get('/faq',[Home::class,'pages']);
Route::get('/blogs',[Home::class,'pages']);
Route::get('/course_details/{id}',[Home::class,'course_details']);
Route::get('/course/{url}',[Home::class,'all_courses']);
Route::get('/{title}',[Home::class,'dynamic_pages']);
Route::get('/read/{title}',[Home::class,'blog_details']);
