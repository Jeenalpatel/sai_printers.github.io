<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ordercontroller extends Controller
{
    //
    public function order()
    {
         $cartproduct = DB::table('cart_product')->first();
         // $uid = $cartproduct->uid;
         // dd($cartproduct);
    	$data= DB::table('payinfo')
    		->leftjoin('users','users.id','=','payinfo.uid')
            // ->leftjoin('cart_product','cart_product.p_id','=','payinfo.id')
            // ->where('cart_product.uid','=',$cartproduct->uid)
    		->select('users.name as uname','users.email as umail','payinfo.*')
    		->get();

            // dd($data);

        $data1 = DB::table('payinfo')
                ->leftjoin('cart_product','cart_product.p_id','=','payinfo.id')
                // ->where('cart_product.uid','=',$request->userid)
                ->get();
                // dd($data1);


    	return view('admin_layout.order')->withdata($data)->withdata1($data1);




    }
    public function showdetail(Request $request,$id)
    {
    		// dd($request->all(),decrypt($id));
        
        $cartCollection = \Cart::getContent();
        // dd($cartCollection);
        // $cart = $cartCollection->id;
        // dd($cart);
    	$userid= $request->userid;
        // dd($userid);
        $pid= $request->pid;
        // dd($pid);
        $cart_product = DB::table('cart_product')
                        ->where('cart_product.uid','=',$request->userid)
                        ->get();
        // dd($cart_product);

        $bb= DB::table('cart_product')
            ->where('cart_product.uid','=',$request->userid)
            ->leftjoin('bb_client_detail','bb_client_detail.id','=','cart_product.att')
            ->where('bb_client_detail.user_id','=',$request->userid)
            ->where('cart_product.p_id','=',$request->pid)
            // ->where('bb_client_detail.id','=',$request->sid)
            ->select('cart_product.*','bb_client_detail.*')
            ->get();

            // dd($bb);

       $lp = DB::table('cart_product')
            ->where('cart_product.uid','=',$request->userid)
            ->leftjoin('laterpad_client_detail','laterpad_client_detail.id','=','cart_product.att')
            ->where('laterpad_client_detail.user_id','=',$request->userid)
            ->where('cart_product.p_id','=',$request->pid)
            ->select('cart_product.*','laterpad_client_detail.*')
            ->get();

            // dd($lp,$bb);

        $banner = DB::table('cart_product')
            ->where('cart_product.uid','=',$request->userid)
            ->leftjoin('banner_client_detail','banner_client_detail.id','=','cart_product.att')
            ->where('banner_client_detail.user_id','=',$request->userid)
            ->where('cart_product.p_id','=',$request->pid)
            ->select('cart_product.*','banner_client_detail.*')
            ->get();
        // dd($banner);

            $handbill = DB::table('cart_product')
            ->where('cart_product.uid','=',$request->userid)
            ->leftjoin('handbill_client_detail','handbill_client_detail.id','=','cart_product.att')
            ->where('handbill_client_detail.user_id','=',$request->userid)
            ->where('cart_product.p_id','=',$request->pid)
            ->select('cart_product.*','handbill_client_detail.*')
            ->get();



        $envelop = DB::table('cart_product')
            ->where('cart_product.uid','=',$request->userid)
            ->leftjoin('envelop_client_detail','envelop_client_detail.id','=','cart_product.att')
            ->where('envelop_client_detail.user_id','=',$request->userid)
            ->where('cart_product.p_id','=',$request->pid)
            ->select('cart_product.*','envelop_client_detail.*')
            ->get();
        

        $visitingcard = DB::table('cart_product')
            ->where('cart_product.uid','=',$request->userid)
            ->leftjoin('vc_client_detail','vc_client_detail.id','=','cart_product.att')
            ->where('vc_client_detail.user_id','=',$request->userid)
            ->where('cart_product.p_id','=',$request->pid)
            ->select('cart_product.*','vc_client_detail.*')
            ->get();
        // dd($bb,$lp,$handbill,$visitingcard,$envelop,$banner);

    	$billbook = DB::table('payinfo')
    			->leftjoin('cart_product','cart_product.p_id','=','payinfo.id')
                ->leftjoin('bb_client_detail','bb_client_detail.user_id','=','payinfo.uid')
    			->where('cart_product.p_id','=',$request->id)
                ->where('bb_client_detail.id','=',$request->sid)
                
                // ->where('bb_client_detail.id','=','cart_product.att')

				
    			->select('payinfo.*','cart_product.*','bb_client_detail.*')
    			->get();
    			// dd($billbook);

                
        $laterpad = DB::table('payinfo')
                ->leftjoin('cart_product','cart_product.p_id','=','payinfo.id')
                ->leftjoin('laterpad_client_detail','laterpad_client_detail.user_id','=','payinfo.uid')
                ->where('cart_product.p_id','=',$request->id)
                ->where('laterpad_client_detail.id','=',$request->sid)
                
                // ->where('latterpad_client_detail.id','=','cart_product.att')

                
                ->select('payinfo.*','cart_product.*','laterpad_client_detail.*')
                ->get();
                // dd($laterpad);
        
			


			
    	
    	
    return view('admin_layout.showorder_detail')->withbillbook($billbook)->withlaterpad($laterpad)->withuserid($userid)->withpid($pid)->withbb($bb)->withlp($lp)->withbanner($banner)->withhandbill($handbill)->withvisitingcard($visitingcard)->withenvelop($envelop);    	

   	
    }
}
