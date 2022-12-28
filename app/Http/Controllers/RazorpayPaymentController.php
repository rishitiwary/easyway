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
        return view('razorpayView',$data);
    }

    public function store(Request $req)
    {
        
        $input = $req->all();
        
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
  
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
 

        $redirectUrl='payment/response?uid='.$req->input('uid').'&razorpay_payment_id='.$req->input('razorpay_payment_id');
        
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
       $uid=$req->input('uid');
       $razorpay_payment_id=$req->input('razorpay_payment_id');

       $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
      
       $response = $api->payment->fetch($razorpay_payment_id);
        
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
         
       return view('razorpayResponse',$data);
       
    }
}
