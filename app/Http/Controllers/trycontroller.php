<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class trycontroller extends Controller
{
    //
    public function trymain_layout()
    {
        $logo = DB::table('logo')->get();
        $banner = DB::table('banner')
        ->where('active','=','active')
        ->get();
        $works= DB::table('works')->get();
        
        return view('try_layout.trymain_layout')->withLogo($logo)->withBanner($banner)->withworks($works);
        
    }
    public function trydropdown()
    {
    	// $quality = DB::table('quality')->get();
     //    $quantity = DB::table('quantity')->get();
     //    $side = DB::table('visitingcard_side')->get();
     //    $maintable = DB::table('vcard_price_list')->get();
     //    $data1 = DB::table('vcard_price_list')
     //            ->leftjoin('quality','quality.id','=','vcard_price_list.quality')
     //            ->leftjoin('quantity','quantity.id','=','vcard_price_list.quantity')
     //            ->leftjoin('visitingcard_side','visitingcard_side.id','=','vcard_price_list.side')
     //            ->select('vcard_price_list.*','quality.q_name as qualityname','quantity.q_value as quantity1','visitingcard_side.side as sideofcard')
     //            ->get();
     //    // dd($data1);
        // dd($maintable);
        $logo = DB::table('logo')->get();
        $bimage = DB::table('b_image')->first();
        $acontent = DB::table('about_content')->first();

        $size = DB::table('billbook_size')->get();
        
        $quantity = DB::table('billbook_quantity')->get();
        
    	return view('try_layout.trydropdown')->withlogo($logo)->withbimage($bimage)->withacontent($acontent)->withsize($size)->withquantity($quantity);
    }
    public function dd_list(request $request)
    {
        $query = DB::table('vcard_price_list')
                    ->leftjoin('quality','quality.id','=','vcard_price_list.quality')
                    ->leftjoin('quantity','quantity.id','=','vcard_price_list.quantity')
                    ->leftjoin('visitingcard_side','visitingcard_side.id','=','vcard_price_list.side')
                    ->where('quality','=',$request->a)
                    ->select('vcard_price_list.*','quality.q_name as cardname','quantity.q_value as quantity1','visitingcard_side.side as sideofcard')
                    ->get();

                    // dd($query);

                    return $query;
    }
    public function my_reg()
    {
        $logo = DB::table('logo')->get();
        return view('try_layout.reg')->withlogo($logo);
    }

}
