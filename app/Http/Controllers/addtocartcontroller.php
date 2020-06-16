<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class addtocartcontroller extends Controller
{
    public function add_quality()
    {
    	$data = DB::table('quality')->get();
    	// dd($data);
    	return view('admin_layout.add_q_q')->withdata($data);
    }
    public function q_insert(Request $request)
    {
    	DB::table('quality')
            ->insert(["q_name"=>$request->q_name]);

        return redirect()->route('add_quality');
    }

    public function add_quantity()
    {
    	$data = DB::table('quantity1')
                ->leftjoin('quality','quality.id','=','quantity1.quality_id')
                ->select('quantity1.*','quality.q_name as quality1','quality.id as qualityid')
                ->get();
            
        $quality = DB::table('quality')->get();
    	return view('admin_layout.add_q_q1')->withdata($data)->withquality($quality);
    }
    public function q_insert1(Request $request)
    {
    	DB::table('quantity1')
            ->insert(["quality_id"=>$request->quality_id,"q_value"=>$request->q_value]);
        return redirect()->route('add_quantity');
    }

    public function add_side()
    {
        $data = DB::table('vcard_side')
                ->leftjoin('quality','quality.id','=','vcard_side.quality_id')
                ->leftjoin('quantity1','quantity1.id','=','vcard_side.quantity_id')
                ->select('vcard_side.*','quality.q_name as quality','quantity1.q_value as quantity')
                ->get();
        $quality = DB::table('quality')->get();
        $quantity = DB::table('quantity1')->get();
        return view('admin_layout.add_side')->withdata($data)->withquality($quality)->withquantity($quantity);
    }
    public function side_insert(Request $request)
    {
        DB::table('vcard_side')
            ->insert(["quality_id"=>$request->quality_id,"quantity_id"=>$request->quantity_id,"side"=>$request->side]);
        return redirect()->route('add_side');
    }

    public function price_list()
    {

        $data = DB::table('vcard_price_list')
                ->leftjoin('quality','quality.id','=','vcard_price_list.quality')
                ->leftjoin('quantity1','quantity1.id','=','vcard_price_list.quantity')
                ->leftjoin('vcard_side','vcard_side.id','=','vcard_price_list.side')
                ->select('vcard_price_list.*','quality.q_name as qualityname','quantity1.q_value as quantity','vcard_side.side as sideofcard')
                ->get();
            // dd($data);

        $quality = DB::table('quality')->get();
        $quantity = DB::table('quantity1')->get();
        $side = DB::table('vcard_side')->get();

        return view('admin_layout.price_per_card')->withdata($data)->withquality($quality)->withquantity($quantity)->withside($side);
   
    }

    public function price_list_insert(Request $request)
    {
        dd($request->all());
        // dd($request);
        DB::table('vcard_price_list')
            ->insert(["quantity"=>$request->quantity_id,"quality"=>$request->quality_id,"side"=>$request->side_id,"price_per_card"=>$request->price_per_card]);

        return redirect()->route('price_list');
    }
    public function quantity_list(Request $request)
    {

        // dd($request->all());

        $query = DB::table('quantity1')
                    ->where('quality_id','=',$request->a)
                    ->select('quantity1.q_value','quantity1.id')
                    ->get();
                    // dd($query);
                    return $query;
    }
    public function side_list(Request $request)
    {

        // dd($request->all());

        $query = DB::table('vcard_side')
                    ->where('quantity_id','=',$request->a)
                    ->select('vcard_side.side','vcard_side.id')
                    ->get();
                     // dd($query);
                    return $query;
    }

    // for bill book
    
}
