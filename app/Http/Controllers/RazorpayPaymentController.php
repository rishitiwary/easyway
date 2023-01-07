<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Exception;
use Illuminate\Support\Facades\DB; 
class RazorpayPaymentController extends Controller
{
    public function index(Request $req)
    {       
        
        $data['setting']=DB::select('select admin_logo from general_setting');
         $data['row']=DB::select('select * from students where id='.$req->input('studentid'));
        return view('razorpay.razorpayView',$data);
    }

    public function store(Request $req)
    {
        
    
        $input = $req->all();
 
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
  
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
        if($req->input('courseid')!=''){
            $redirectUrl='payment/response?courseid='.$req->input('courseid').'&razorpay_payment_id='.$req->input('razorpay_payment_id');
        }else{
            $redirectUrl='payment/response?uid='.$req->input('uid').'&razorpay_payment_id='.$req->input('razorpay_payment_id');
        }
        
       
        
        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 
            } catch (Exception $e) {
                return  $e->getMessage();
                Session::put('errors',$e->getMessage());
                $req->session()->flash('Error', 'Some error occured..!!');
                return redirect($redirectUrl);

            }
        }
        $req->session()->flash('success', 'Payment successful..!!');
        return redirect($redirectUrl);
    
    }
    public function response(Request $req)
    {

       
        $razorpay_payment_id=$req->input('razorpay_payment_id');

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
       
        $response = $api->payment->fetch($razorpay_payment_id);
        $courseDetails=DB::table("courses")->where("id",$req->input('courseid'))->first();
        if($req->input('courseid')!=''){
            $data=array(
            'course_id'=>$req->input('courseid'),
            'tradegroup_id'=>$courseDetails->tradegroup_id,
            'trade_id'=>$courseDetails->trade_id,
            'payment_id'=>$response['id'],
            'status'=>$response['status'],
            'method'=>$response['method'],
            'contact'=>$response['contact'],
            'email'=>$response['email'],
            'amount'=>$response['amount']/100,
               
            );
              $check=DB::table('course_payment')->where('payment_id',$razorpay_payment_id)->count();
 
            if($check<=0){
            
        $insert=DB::table("course_payment")->insert($data);
        if ($insert) {
            $req->session()->flash('success', 'Payment successful..!!');
         } else {
            $req->session()->flash('error', 'Some error occured...');
         }
        }

        //course payment success
      
        $data['setting']=DB::table('general_setting')->get()->first();
        $data['payment']=DB::table('course_payment')->where('payment_id',$razorpay_payment_id)->first();
        return view('razorpay.razorpayResponseCourses',$data);

        }else{
       $uid=$req->input('uid');
        $data=array(
            'razorpay_payment_id'=>$response['id'],
            'status'=>$response['status'],
            'method'=>$response['method'],
            'card_id'=>$response['card_id'],
            'captured'=>$response['captured'],
             'uid'=>$req->input('uid'),
             'amount'=>$response['amount']/100,
        );
      
         $check=DB::table('online_admission_payment')->where('razorpay_payment_id',$razorpay_payment_id)->count();
 
         if($check>0){
              
           }else{
            $req->session()->flash('success', 'Payment successful..!!');
            $insert =  DB::table('online_admission_payment')->insert($data);
            if ($insert) {
                $req->session()->flash('success', 'Payment successful..!!');
             } else {
                $req->session()->flash('error', 'Some error occured...');
             }
           } 
           $data['setting']=DB::select('select admin_logo from general_setting');
           $res=$data['payment']=DB::table('online_admission_payment')->where('razorpay_payment_id',$razorpay_payment_id)->first();
           if($res->status=='captured'){
            $data2=array(
                'pay_status'=>1
               );
            $update =  DB::table('students')->where('id', $uid)->update($data2);
           }
      
         
       return view('razorpay.razorpayResponse',$data);
    }
       
    }

    public function coursePayment(Request $req,$id){
        $userinfo= $req->session()->get('userInfo');
          $email=$userinfo['email'];
        $data['userinfo']=DB::table("students")->where("email",$email)->first();
        $data['res']=DB::table("courses")->where("id",$id)->first();
        $data['setting']=DB::table('general_setting')->first('admin_logo');
        return view('razorpay.coursePayment',$data);
    }
}
