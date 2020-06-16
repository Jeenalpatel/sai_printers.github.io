<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class facilitycontroller extends Controller
{
    public function bill_book_size()
    {
    	$data = DB::table('billbook_size')
    			->get();
        return view('admin_layout.modal.billbook_size')->withdata($data);
    }

    public function bill_book_size_insert(Request $request)
    {
     	DB::table('billbook_size')
     		->insert(["size"=>$request->size]);

     		        return redirect()->route('bill_book_size');

    }
    public function bill_book_quantity()
    {
        $size = DB::table('billbook_size')
                ->get();
        $data = DB::table('billbook_quantity')
                ->leftjoin('billbook_size','billbook_size.id','=','billbook_quantity.size_id')
                ->select('billbook_quantity.*','billbook_size.size as size1','billbook_size.id as sizeid')
                ->get();
                // dd($data);
        return view('admin_layout.modal.billbook_quantity')->withsize($size)->withdata($data);
    }
    public function bill_book_quantity_insert(Request $request)
    {
        DB::table('billbook_quantity')
            ->insert(["size_id"=>$request->size,"quantity"=>$request->quantity]);

                    return redirect()->route('bill_book_quantity');

    }

    public function bill_book_pricelist()
    {
        $bsize = DB::table('billbook_size')
                ->get();
        $bquantity = DB::table('billbook_quantity')->get();

        $data = DB::table('billbook_price_list')
                ->leftjoin('billbook_size','billbook_size.id','=','billbook_price_list.size_id')
                ->leftjoin('billbook_quantity','billbook_quantity.id','=','billbook_price_list.quantity_id')
                ->select('billbook_price_list.*','billbook_size.size as size1','billbook_quantity.quantity as quantity1')
                ->get();
        
        return view('admin_layout.modal.billbook_pricelist')->withbsize($bsize)->withbquantity($bquantity)->withdata($data);
    }

    public function bill_book_pricelist_insert(Request $request)
    {
        DB::table('billbook_price_list')
            ->insert(["size_id"=>$request->size,"quantity_id"=>$request->quantity,"price_per_book"=>$request->price_per_book]);

                    return redirect()->route('bill_book_pricelist');

    }
    public function b_quantity_list(Request $request)
    {

        

        $query = DB::table('billbook_quantity')
                    ->where('size_id','=',$request->a)
                    ->select('billbook_quantity.quantity','billbook_quantity.id')
                    ->get();
                    // dd($query);
                    return $query;
    }


    // envelop start
    public function e_quality()
    {
        $data = DB::table('envelop_quality')->get();
        return view('admin_layout.modal.envelop_quality')->withdata($data);
    }
    public function e_quality_insert(Request $request)
    {
        DB::table('envelop_quality')
            ->insert(["quality"=>$request->quality]);
            return redirect()->route('e_quality');

        
    }
    public function e_quantity()
    {
        $quality = DB::table('envelop_quality')->get();
        $data = DB:: table('envelop_quantity')
                ->leftjoin('envelop_quality','envelop_quality.id','=','envelop_quantity.quality_id')
                ->select('envelop_quantity.*','envelop_quality.quality as quality1')
                ->get();
        return view('admin_layout.modal.envelop_quantity')->withquality($quality)->withdata($data);
    }
    public function e_quantity_insert(Request $request)
    {
        DB::table('envelop_quantity')
            ->insert(["quality_id"=>$request->quality,"quantity"=>$request->quantity]);
            return redirect()->route('e_quantity');

        
    }
    public function envelop_pricelist()
    {
        $equality = DB::table('envelop_quality')->get();
        $equantity = DB:: table('envelop_quantity')->get();
        $data = DB::table('envelop_price_list')
                ->leftjoin('envelop_quality','envelop_quality.id','=','envelop_price_list.quality_id')
                ->leftjoin('envelop_quantity','envelop_quantity.id','=','envelop_price_list.quantity_id')
                ->select('envelop_price_list.*','envelop_quality.quality as quality1','envelop_quantity.quantity as quantity1')
                ->get();
        

        return view('admin_layout.modal.envelop_pricelist')->withequality($equality)->withequantity($equantity)->withdata($data);
    }

    public function e_quantity_list(Request $request)
    {

        

        $query = DB::table('envelop_quantity')
                    ->where('quality_id','=',$request->a)
                    ->select('envelop_quantity.quantity','envelop_quantity.id')
                    ->get();
                    // dd($query);
                    return $query;
    }
    public function envelop_pricelist_insert(Request $request)
    {
        DB::table('envelop_price_list')
            ->insert(["quality_id"=>$request->quality,"quantity_id"=>$request->quantity,"price_per_envelop"=>$request->price_per_envelop]);

                    return redirect()->route('envelop_pricelist');

    }

    // handbill start
    public function handbill_size()
    {
        $data = DB::table('handbill_size')->get();
        return view('admin_layout.modal.handbill_size')->withdata($data);
    }
    public function handbill_size_insert(Request $request)
    {
        DB::table('handbill_size')
            ->insert(["size"=>$request->size]);
        return redirect()->route('handbill_size');
    }

    public function handbill_quantity()
    {
        $size = DB::table('handbill_size')->get();

        $data = DB::table('handbill_quantity')
                ->leftjoin('handbill_size','handbill_size.id','=','handbill_quantity.size_id')
                ->select('handbill_quantity.*','handbill_size.size as size1','handbill_size.id as sizeid')
                ->get();
        

        return view('admin_layout.modal.handbill_quantity')->withsize($size)->withdata($data);
    }
    public function handbill_quantity_insert(Request $request)
    {
        DB::table('handbill_quantity')
            ->insert(["size_id"=>$request->size,"quantity"=>$request->quantity]);
        return redirect()->route('handbill_quantity');
    }
    public function handbill_side()
    {
        $size = DB::table('handbill_size')->get();
        $data = DB::table('handbill_side')
                ->leftjoin('handbill_size','handbill_size.id','=','handbill_side.size_id')
                ->leftjoin('handbill_quantity','handbill_quantity.id','=','handbill_side.quantity_id')
                ->select('handbill_side.*','handbill_size.size as size1','handbill_quantity.quantity as quantity1')
                ->get();

        $quantity = DB::table('handbill_quantity')->get();
        return view('admin_layout.modal.handbill_side')->withsize($size)->withquantity($quantity)->withdata($data);
        
    }

    public function handbill_side_insert(Request $request)
    {
        DB::table('handbill_side')
            ->insert(["size_id"=>$request->size,"quantity_id"=>$request->quantity,"side"=>$request->side]);
        return redirect()->route('handbill_side');
    }

    public function h_quantity_list(Request $request)
    {

        

        $query = DB::table('handbill_quantity')
                    ->where('size_id','=',$request->a)
                    ->select('handbill_quantity.quantity','handbill_quantity.id')
                    ->get();
                    // dd($query);
                    return $query;
    }

     public function h_side_list(Request $request)
    {

        // dd($request->all());

        $query = DB::table('handbill_side')
                    ->where('quantity_id','=',$request->a)
                    ->select('handbill_side.side','handbill_side.id')
                    ->get();
                     
                     // dd($request->q,$query);

                    return $query;
    }

    public function handbill_pricelist()
    {   
        $size = DB::table('handbill_size')->get();
        $side = DB::table('handbill_side')->get();
                
        $quantity = DB::table('handbill_quantity')->get();


        $data = DB::table('handbill_price_list')
                ->leftjoin('handbill_size','handbill_size.id','=','handbill_price_list.size_id')
                ->leftjoin('handbill_quantity','handbill_quantity.id','=','handbill_price_list.quantity_id')
                ->leftjoin('handbill_side','handbill_side.id','=','handbill_price_list.side_id')
                ->select('handbill_price_list.*','handbill_size.size as size1','handbill_quantity.quantity as quantity1','handbill_side.side as side1')
                ->get();
        
        
        return view('admin_layout.modal.handbill_pricelist')->withsize($size)->withquantity($quantity)->withside($side)->withdata($data);
    }
    public function handbill_pricelist_insert(Request $request)
    {
        DB::table('handbill_price_list')
            ->insert(["size_id"=>$request->size,"quantity_id"=>$request->quantity,"side_id"=>$request->side,"price_per_handbill"=>$request->price_per_handbill,]);
            return redirect()->route('handbill_pricelist');
    }



    // laterpad start
    public function laterpad_size()
    {
        $data = DB::table('laterpad_size')->get();
        return view('admin_layout.modal.laterpad_size')->withdata($data);
    }

    public function laterpad_size_insert(Request $request)
    {
        DB::table('laterpad_size')
            ->insert(["size"=>$request->size]);
        return redirect()->route('laterpad_size');
    }

    public function laterpad_quantity()
    {
        $size = DB::table('laterpad_size')->get();

        $data = DB::table('laterpad_quantity')
                ->leftjoin('laterpad_size','laterpad_size.id','=','laterpad_quantity.size_id')
                ->select('laterpad_quantity.*','laterpad_size.size as size1')
                ->get();
        return view('admin_layout.modal.laterpad_quantity')->withsize($size)->withdata($data);
    }

    public function laterpad_quantity_insert(Request $request)
    {
        DB::table('laterpad_quantity')
            ->insert(["size_id"=>$request->size,"quantity"=>$request->quantity]);
        return redirect()->route('laterpad_quantity');
    }

    public function laterpad_pricelist()
    {   
        $size = DB::table('laterpad_size')->get();
    
                
        $quantity = DB::table('laterpad_quantity')->get();


        $data = DB::table('laterpad_price_list')
                ->leftjoin('laterpad_size','laterpad_size.id','=','laterpad_price_list.size_id')
                ->leftjoin('laterpad_quantity','laterpad_quantity.id','=','laterpad_price_list.quantity_id')
               
                ->select('laterpad_price_list.*','laterpad_size.size as size1','laterpad_quantity.quantity as quantity1')
                ->get();
        
        
        return view('admin_layout.modal.laterpad_pricelist')->withsize($size)->withquantity($quantity)->withdata($data);
    }
    public function laterpad_pricelist_insert(Request $request)
    {
        DB::table('laterpad_price_list')
            ->insert(["size_id"=>$request->size,"quantity_id"=>$request->quantity,"price_per_laterpad"=>$request->price_per_laterpad]);
            return redirect()->route('laterpad_pricelist');
    }
    public function l_quantity_list(Request $request)
    {

        

        $query = DB::table('laterpad_quantity')
                    ->where('size_id','=',$request->a)
                    ->select('laterpad_quantity.quantity','laterpad_quantity.id')
                    ->get();
                    // dd($query);
                    return $query;
    }

    // banner start
    public function banner_quality()
    {
        $data = DB::table('banner_quality')->get();
        return view('admin_layout.modal.banner_quality')->withdata($data);
    }
    public function banner_quality_insert(Request $request)
    {
        DB::table('banner_quality')
            ->insert(["quality"=>$request->quality]);
        return redirect()->route('banner_quality');
    }

    public function banner_quantity()
    {
        $quality = DB::table('banner_quality')->get();

        $data = DB::table('banner_quantity')
                ->leftjoin('banner_quality','banner_quality.id','=','banner_quantity.quality_id')
                ->select('banner_quantity.*','banner_quality.quality as quality1')
                ->get();
        return view('admin_layout.modal.banner_quantity')->withquality($quality)->withdata($data);
    }
    public function banner_quantity_insert(Request $request)
    {
        DB::table('banner_quantity')
            ->insert(["quality_id"=>$request->quality,"quantity"=>$request->quantity]);
        return redirect()->route('banner_quantity');
    }

    public function banner_pricelist()
    {   
        $quality = DB::table('banner_quality')->get();
    
                
        $quantity = DB::table('banner_quantity')->get();


        $data = DB::table('banner_price_list')
                ->leftjoin('banner_quality','banner_quality.id','=','banner_price_list.quality_id')
                ->leftjoin('banner_quantity','banner_quantity.id','=','banner_price_list.quantity_id')
               
                ->select('banner_price_list.*','banner_quality.quality as quality1','banner_quantity.quantity as quantity1')
                ->get();
        
        
        return view('admin_layout.modal.banner_pricelist')->withquality($quality)->withquantity($quantity)->withdata($data);
    }
    public function banner_pricelist_insert(Request $request)
    {
        DB::table('banner_price_list')
            ->insert(["quality_id"=>$request->quality,"quantity_id"=>$request->quantity,"price_per_banner"=>$request->price_per_banner]);
            return redirect()->route('banner_pricelist');
    }

    public function banner_quantity_list(Request $request)
    {

        

        $query = DB::table('banner_quantity')
                    ->where('quality_id','=',$request->a)
                    ->select('banner_quantity.quantity','banner_quantity.id')
                    ->get();
                    // dd($query);
                    return $query;
    }

}
