<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class shopingcartcontroller extends Controller
{
    //
    // public function showcart()
    // {
    // 	$logo = DB::table('logo')->get();
    // 	return view('client_layout.shopingcart')->withlogo($logo);
    // }

    public function cart()  
    {
        // dd($request->all());
    	$logo = DB::table('logo')->get();
        $cartCollection = \Cart::getContent();
        $subTotal = \Cart::getSubTotal();
        // dd($cartCollection);
        // dd($subTotal);
      
        return view('client_layout.shopingcart')->with(['cartCollection' => $cartCollection])->withsubTotal($subTotal)->withlogo($logo);

    }


        public function add(Request $request)
        {
        	        // dd($request->all());
                $uid = Auth::guard('web')->user()->id;
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
                'quantity' =>$request->quantity,
                'sid'=>$request->sid,
                'uid' =>$uid


            )
        ));
        return redirect()->route('cart')->with('success_msg', 'Item is Added to Cart!');
    }

    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart')->with('success_msg', 'Item is removed!');
    }

}
