<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class payumoneycontroller extends Controller
{
    //
    public function payumoney(Request $request)
    {
        $cid = Auth::guard('web')->user()->id;

        // dd($request->all(),$cid);

         $cartCollection = \Cart::getContent();

        
        $MERCHANT_KEY = "gtKFFx";
        $SALT = "eCwWELxi";
        $PAYU_BASE_URL = "https://test.payu.in";
        $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);

        $arr =['key'=>$MERCHANT_KEY,'txnid'=>$txnid,'amount'=>$request->amount,'productinfo'=>$request->productinfo,'firstname'=>$request->firstname,'email'=>$request->email,'contact'=>$request->contact];

        $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";

        $hashVarsSeq = explode('|', $hashSequence);
        $hash_string = '';  

        foreach($hashVarsSeq as $hash_var) 
        {
          $hash_string .= isset($arr[$hash_var]) ? $arr[$hash_var] : '';
          $hash_string .= '|';
        }

        $hash_string .= $SALT;
        $hash = strtolower(hash('sha512', $hash_string));

        return view('payumoneyform')->withData($arr)->withMerch($MERCHANT_KEY)->withHash($hash)->withTrans($txnid);
    }
    public function payment_view_sucess(Request $request)
    {
    // dd($request->all());
    $cid = Auth::guard('web')->user()->id;

    $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";          
    $hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';  
    
    foreach($hashVarsSeq as $hash_var) 
    {
      $hash_string .= isset($arr[$hash_var]) ? $arr[$hash_var] : '';
      $hash_string .= '|';
    }          

    $MERCHANT_KEY = "gtKFFx";
    $SALT = "eCwWELxi";          
    $hash_string .= $SALT;
    $hash = strtolower(hash('sha512', $hash_string));        
    $surl = "http://localhost/laravel/projects/society_new/payment_view_sucess";
    $furl = "http://localhost/laravel/projects/society_new/payment_view_failure";
    $service_provider = "PayuMoney";          

    $arr =  DB::table('payinfo')
            ->insertGetid(['uid'=>$cid,'status'=>$request->status,'hash'=>$request->hash,'key'=>$MERCHANT_KEY,'txnid'=>$request->txnid,'amount'=>$request->amount,'productinfo'=>$request->title,'firstname'=>$request->name,'email'=>$request->email,'contact'=>$request->contact,'surl'=>$surl,'furl'=>$furl,'service_provider'=>$service_provider]);

     
    $cartCollection = \Cart::getContent();

        // dd($cartCollection);        

        foreach ($cartCollection as $item) {
            $prodid = $item->id;
            $prodname = $item->name;
            $prodqty = $item->attributes;
            $prodprice = $item->price;


            // $price_qty = $prodprice * $prodqty;

            // dd($prodqty);

            $arr_product = DB::table('cart_product')
                    ->insert([
                            'p_id'=>$arr,
                            'product_id'=>$prodid,
                            'cate_name'=>$prodname,
                            'att'=>$prodqty->sid,
                            'total_price'=>$prodprice,
                            'uid'=>$prodqty->uid
                            // 'price_qty'=>$price_qty,
                    ]);
            
        }  

    if($request->status == "success")
    {
        echo "<h2>Thank You.</h2>";
        echo "<h3> Your Payment status is <u> ". $request->status ."</u>.</h3>";
        echo "<h4>Your Transaction ID for this transaction is <u> ".$request->txnid." </u>.
        </h4>";
        echo "<h4>We have received a payment of <u> Rs. " . $request->amount . ". </u> Your order will soon be shipped.</h4>";
    }
    else
    {
       echo "Invalid Transaction. Please try again";

       return redirect()->route('payment_view_failure');
    }           

    return view('payment_success')->withArr($arr);
    }

    public function payment_view_failure()
    {
        // dd('Failureeeeee payemnt');
        $cartCollection = \Cart::getContent();
    }

}
