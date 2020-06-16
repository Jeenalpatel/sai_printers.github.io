<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

// modal1 = modal page of any category
// finalcart = final page than ahter product store in cart

class modalController extends Controller
{
    
     public function modal1($id)
    {
            

        $number = DB::table('category')
                ->leftjoin('cate_name','cate_name.id','=','category.cate_id')
                ->leftjoin('subcate_name','subcate_name.id','=','category.subcate_id')
                ->select('cate_name.id as categoryid','cate_name.name as categoryname','subcate_name.sub_name as subcategoryname')
                ->where('category.id','=',decrypt($id))
                ->first();
                // dd($number,$number->categoryid);
        if($number->categoryid == '1')
        {
    	
        $logo = DB::table('logo')->get();
        $quality = DB::table('quality')->get();
        $quantity = DB::table('quantity1')->get();
        $side = DB::table('vcard_side')->get();

        $data1 = DB::table('vcard_price_list')
                ->leftjoin('quality','quality.id','=','vcard_price_list.quality')
                ->leftjoin('quantity1','quantity1.id','=','vcard_price_list.quantity')
                ->leftjoin('vcard_side','vcard_side.id','=','vcard_price_list.side')
                ->select('vcard_price_list.*','quality.q_name as qualityname','quantity1.q_value as quantity','vcard_side.side as sideofcard')
                ->get();
                // dd($data1);
        

        $data = DB::table('category')
                    ->leftjoin('cate_name','cate_name.id','=','category.cate_id')
                    ->leftjoin('subcate_name','subcate_name.id','=','category.subcate_id')
                    ->select('category.*','cate_name.id as categoryid','cate_name.name as categoryname','subcate_name.sub_name as subcategoryname')
                    ->where('category.id','=',decrypt($id))

                    ->get();

                    return view('client_layout.categories_page.visitingcard')->withlogo($logo)->withquality($quality)->withquantity($quantity)->withside($side)->withdata1($data1)->withdata($data);
        

        }
        if ($number->categoryid == '2')
        {
            $logo = DB::table('logo')->get();

            $data = DB::table('category')
                    ->leftjoin('cate_name','cate_name.id','=','category.cate_id')
                    ->leftjoin('subcate_name','subcate_name.id','=','category.subcate_id')
                    ->select('category.*','cate_name.id as categoryid','cate_name.name as categoryname','subcate_name.sub_name as subcategoryname')
                    ->where('category.id','=',decrypt($id))

                    ->get();
            
        $quality = DB::table('banner_quality')->get();
    
                
        $quantity = DB::table('banner_quantity')->get();


                
        
                    return view('client_layout.categories_page.banner')->withlogo($logo)->withdata($data)->withquality($quality)->withquantity($quantity);
            
        
            
        }
        if ($number->categoryid == '4')
        {
            $logo = DB::table('logo')->get();

            $data = DB::table('category')
                    ->leftjoin('cate_name','cate_name.id','=','category.cate_id')
                    ->leftjoin('subcate_name','subcate_name.id','=','category.subcate_id')
                    ->select('category.*','cate_name.id as categoryid','cate_name.name as categoryname','subcate_name.sub_name as subcategoryname')
                    ->where('category.id','=',decrypt($id))

                    ->get();
            $bsize = DB::table('billbook_size')->get();
            $bquantity = DB::table('billbook_quantity')->get();


                
        
                    return view('client_layout.bill_book')->withlogo($logo)->withdata($data)->withbsize($bsize)->withbquantity($bquantity);
            
        
            
        }
        if ($number->categoryid == '6')
        {
            $logo = DB::table('logo')->get();

            $data = DB::table('category')
                    ->leftjoin('cate_name','cate_name.id','=','category.cate_id')
                    ->leftjoin('subcate_name','subcate_name.id','=','category.subcate_id')
                    ->select('category.*','cate_name.id as categoryid','cate_name.name as categoryname','subcate_name.sub_name as subcategoryname')
                    ->where('category.id','=',decrypt($id))

                    ->get();
            
        $equality = DB::table('envelop_quality')->get();
        $equantity = DB::table('envelop_quantity')->get();
        

                
        
                    return view('client_layout.envelop')->withlogo($logo)->withdata($data)->withequantity($equantity)->withequality($equality);
            
        
            
        }

        if ($number->categoryid == '7')
        {
            $logo = DB::table('logo')->get();

            $data = DB::table('category')
                    ->leftjoin('cate_name','cate_name.id','=','category.cate_id')
                    ->leftjoin('subcate_name','subcate_name.id','=','category.subcate_id')
                    ->select('category.*','cate_name.id as categoryid','cate_name.name as categoryname','subcate_name.sub_name as subcategoryname')
                    ->where('category.id','=',decrypt($id))

                    ->get();
            
        $hsize = DB::table('handbill_size')->get();
        $hquantity = DB::table('handbill_quantity')->get();
         $hside = DB::table('handbill_side')->get();
        

                
        
                    return view('client_layout.categories_page.handbill')->withlogo($logo)->withdata($data)->withhquantity($hquantity)->withhsize($hsize)->withhside($hside);
            
        
            
        }

        if ($number->categoryid == '8')
        {
            $logo = DB::table('logo')->get();

            $data = DB::table('category')
                    ->leftjoin('cate_name','cate_name.id','=','category.cate_id')
                    ->leftjoin('subcate_name','subcate_name.id','=','category.subcate_id')
                    ->select('category.*','cate_name.id as categoryid','cate_name.name as categoryname','subcate_name.sub_name as subcategoryname')
                    ->where('category.id','=',decrypt($id))

                    ->get();
            
        $size = DB::table('laterpad_size')->get();
    
                
        $quantity = DB::table('laterpad_quantity')->get();


                
        
                    return view('client_layout.categories_page.laterpad')->withlogo($logo)->withdata($data)->withsize($size)->withquantity($quantity);
            
        
            
        }
        else
        {
            
             echo "error";

        }

    }

    
    public function visitingcard_info(Request $request)
    {
        // dd($request->all());

        $a = DB::table('vcard_price_list')
                ->leftjoin('quality','quality.id','=','vcard_price_list.quality')
                ->leftjoin('quantity1','quantity1.id','=','vcard_price_list.quantity')
                ->leftjoin('vcard_side','vcard_side.id','=','vcard_price_list.side')
                ->where('quality.id','=',$request->quality)
                 ->where('quantity1.id','=',$request->quantity)
                 ->where('vcard_side.id','=',$request->side)
                
                ->select('vcard_price_list.*','quality.q_name as qualityname','quantity1.*','vcard_side.*')
                // 'quantity1.q_value as quantity','vcard_side.side as side1
                ->get();
                // dd($a);

                        
                

        $data = DB::table('category')
                    ->leftjoin('cate_name','cate_name.id','=','category.cate_id')
                    ->leftjoin('subcate_name','subcate_name.id','=','category.subcate_id')
                    ->select('category.*','cate_name.name as categoryname')
                     ->where('category.image','=',$request->image1)
                     ->where('category.b_image','=',$request->image2)
                    ->get();
                

        $info = DB::table('quality')
                // ->where('quality.id','=',($id))
                ->get();
                // dd($info);
        $logo = DB::table('logo')->get();
        
        return view('client_layout.categories_page.visitingcard_info')->witha($a)->withdata($data)->withinfo($info)->withlogo($logo);
    }
    public function dd_list(request $request)
    {
        $query = DB::table('vcard_price_list')
                    ->leftjoin('quality','quality.id','=','vcard_price_list.quality')
                    ->leftjoin('quantity1','quantity1.id','=','vcard_price_list.quantity')
                    ->leftjoin('vcard_side','vcard_side.id','=','vcard_price_list.side')
                    ->where('quality','=',$request->a)
                    ->select('vcard_price_list.*','quality.q_name as cardname','quantity1.q_value as quantity','vcard_side.side as sideofcard')
                    ->get();

                    // dd($query);

                    return $query;

                
    }
    public function quantity_list1(Request $request)
    {

        // dd($request->all());

        $query = DB::table('quantity1')
                    ->where('quality_id','=',$request->a)
                    ->select('quantity1.q_value','quantity1.id')
                    ->get();
                    // dd($query);
                    return $query;
    }
    public function side_list1(Request $request)
    {

        // dd($request->all());

        $query = DB::table('vcard_side')
                    ->where('quantity_id','=',$request->q)
                    ->select('vcard_side.side','vcard_side.id')
                    ->get();
                     
                     // dd($request->q,$query);

                    return $query;
    }

    public function total_list(Request $request)
    {

        // dd($request->all());

        $query = DB::table('vcard_price_list')
                    ->leftjoin('quantity1','quantity1.id','=','vcard_price_list.quantity')
                    ->where('side','=',$request->s)
                    ->select('vcard_price_list.*','quantity1.q_value as qty')
                    ->get();
                     // dd($query);
                    return $query;
    }

    public function bill_book_info(Request $request)
    {
        // dd($request->all());

        $a = DB::table('billbook_price_list')
                 ->leftjoin('billbook_size','billbook_size.id','=','billbook_price_list.size_id')
                ->leftjoin('billbook_quantity','billbook_quantity.id','=','billbook_price_list.quantity_id')

                 ->where('billbook_size.id','=',$request->size)
                ->where('billbook_quantity.id','=',$request->quantity)
                ->select('billbook_price_list.*','billbook_size.size as size1','billbook_quantity.quantity as quantity1')
                ->get();
                // dd($a);
                



        $data = DB::table('category')
                    ->leftjoin('cate_name','cate_name.id','=','category.cate_id')
                    ->leftjoin('subcate_name','subcate_name.id','=','category.subcate_id')
                    ->select('category.*','cate_name.name as categoryname')
                     ->where('category.image','=',$request->image1)
                     ->where('category.b_image','=',$request->image2)
                    ->get();
                // dd($data);
        
        $logo = DB::table('logo')->get();
        return view('client_layout.bill_book_info')->withlogo($logo)->withdata($data)->witha($a);
    }
   


    
    
    // bill_book start
    public function bill_book()
    {
        $logo = DB::table('logo')->get();
        $bsize = DB::table('billbook_size')->get();
        dd($bsize);
        return view('client_layout.bill_book')->withlogo($logo)->withbsize($bsize);
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
    public function bill_total_list(Request $request)
    {

                // dd($request->all());

        $query = DB::table('billbook_price_list')
                    // ->leftjoin('billbook_size','billbook_size.id','=','billbook_price_list.size_id')
                    ->leftjoin('billbook_quantity','billbook_quantity.id','=','billbook_price_list.quantity_id')
                    ->where('quantity_id','=',$request->q)
                    // ->where('size_id','=',$request->b)
                    ->select('billbook_price_list.*','billbook_quantity.quantity as qty')
                    ->get();
                     // dd($query);
                    return $query;
    }

    // envelop start
    public function envelop()
    {
        $logo = DB::table('logo')->get();
        $equality = DB::table('envelop_quality')->get();
        $equantity = DB::table('envelop_quantity')->get();
        $data = DB::table('envelop_price_list')->get();

    return view('client_layout.envelop')->withlogo($logo)->withequality($equality)->withequantity($equantity)->withdata($data);
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
    public function e_total_list(Request $request)
    {

                // dd($request->all());

        $query = DB::table('envelop_price_list')
                    // ->leftjoin('billbook_size','billbook_size.id','=','billbook_price_list.size_id')
                    ->leftjoin('envelop_quantity','envelop_quantity.id','=','envelop_price_list.quantity_id')
                    ->where('quantity_id','=',$request->q)
                    // ->where('size_id','=',$request->b)
                    ->select('envelop_price_list.*','envelop_quantity.quantity as qty')
                    ->get();
                     // dd($query);
                    return $query;
    }
    public function envelop_info(Request $request)
    {
        // dd($request->all());
        $a =  DB::table('envelop_price_list')
                ->leftjoin('envelop_quality','envelop_quality.id','=','envelop_price_list.quality_id')
                ->leftjoin('envelop_quantity','envelop_quantity.id','=','envelop_price_list.quantity_id')
                ->where('envelop_quality.id','=',$request->quality)
                ->where('envelop_quantity.id','=',$request->quantity)
                ->select('envelop_price_list.*','envelop_quality.quality as quality1','envelop_quantity.quantity as quantity1')
                ->get();
                // dd($a);


         $data = DB::table('category')
                    ->leftjoin('cate_name','cate_name.id','=','category.cate_id')
                    ->leftjoin('subcate_name','subcate_name.id','=','category.subcate_id')
                    ->select('category.*','cate_name.name as categoryname')
                     ->where('category.image','=',$request->image1)
                     ->where('category.b_image','=',$request->image2)
                    ->get();
                // dd($data);
               
        $logo = DB::table('logo')->get();
        return view('client_layout.envelop_info')->withlogo($logo)->witha($a)->withdata($data);
    }
    
    // handbill start
    
    public function handbill()
    {
        $logo = DB::table('logo')->get();
        $hsize = DB::table('handbill_size')->get();
        $hquantity = DB::table('handbill_quantity')->get();
         $hside = DB::table('handbill_side')->get();
        
        return view('client_layout.categories_page.handbill')->withlogo($logo)->withhsize($hsize)->withhquantity($hquantity)->withhside($hside);
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

    public function h_side_list1(Request $request)
    {
            
           $query = DB::table('handbill_side')
                    ->where('quantity_id','=',$request->q)
                    ->select('handbill_side.side','handbill_side.id')
                    ->get();
                     
                     // dd($request->q,$query);

                    return $query;
    }

    public function h_total_list(Request $request)
    {

                // dd($request->all());

        $query = DB::table('handbill_price_list')
                    ->leftjoin('handbill_quantity','handbill_quantity.id','=','handbill_price_list.quantity_id')
                    ->where('side_id','=',$request->s)
                    ->select('handbill_price_list.*','handbill_quantity.quantity as qty')
                    ->get();
                     // dd($query);
                    return $query;
    }
    public function handbill_info(Request $request)
    {

         // dd($request->all());
        $a =  DB::table('handbill_price_list')
                ->leftjoin('handbill_size','handbill_size.id','=','handbill_price_list.size_id')
                ->leftjoin('handbill_quantity','handbill_quantity.id','=','handbill_price_list.quantity_id')
                ->leftjoin('handbill_side','handbill_side.id','=','handbill_price_list.side_id')
                ->where('handbill_size.id','=',$request->size)
                ->where('handbill_quantity.id','=',$request->quantity)
                ->where('handbill_side.id','=',$request->side1)
                ->select('handbill_price_list.*','handbill_size.size as size11','handbill_quantity.quantity as quantity1','handbill_side.side as side1')
                ->get();
                // dd($a);


         $data = DB::table('category')
                    ->leftjoin('cate_name','cate_name.id','=','category.cate_id')
                    ->leftjoin('subcate_name','subcate_name.id','=','category.subcate_id')
                    ->select('category.*','cate_name.name as categoryname')
                     ->where('category.image','=',$request->img1)
                     ->where('category.b_image','=',$request->img2)
                     
                    ->get();
                // dd($data);
       
        $logo = DB::table('logo')->get();
        return view('client_layout.categories_page.handbill_info')->withlogo($logo)->withdata($data)->witha($a);
    }
    // laterpad start

    public function laterpad()
    {
        $logo = DB::table('logo')->get();
        return view('client_layout.categories_page.laterpad')->withlogo($logo);
    }
    public function laterpad_info(Request $request)
    {
        // dd($request->all());
        $a =  DB::table('laterpad_price_list')
                ->leftjoin('laterpad_size','laterpad_size.id','=','laterpad_price_list.size_id')
                ->leftjoin('laterpad_quantity','laterpad_quantity.id','=','laterpad_price_list.quantity_id')
                ->where('laterpad_size.id','=',$request->size)
                ->where('laterpad_quantity.id','=',$request->quantity)
                ->select('laterpad_price_list.*','laterpad_size.size as size11','laterpad_quantity.quantity as quantity1')
                ->get();
                // dd($a);


         $data = DB::table('category')
                    ->leftjoin('cate_name','cate_name.id','=','category.cate_id')
                    ->leftjoin('subcate_name','subcate_name.id','=','category.subcate_id')
                    ->select('category.*','cate_name.name as categoryname')
                     ->where('category.image','=',$request->img1)
                     
                    ->get();
                // dd($data);
        
        $logo = DB::table('logo')->get();
        return view('client_layout.categories_page.laterpad_info')->withlogo($logo)->withdata($data)->witha($a);
    }
    public function l_total_list(Request $request)
    {

                // dd($request->all());

        $query = DB::table('laterpad_price_list')
                    ->leftjoin('laterpad_quantity','laterpad_quantity.id','=','laterpad_price_list.quantity_id')
                    ->where('quantity_id','=',$request->s)
                    ->select('laterpad_price_list.*','laterpad_quantity.quantity as qty')
                    ->get();
                     // dd($query);
                    return $query;
    }

    // banner start

    public function banner()
    {
        $logo = DB::table('logo')->get();
        return view('client_layout.categories_page.banner')->withlogo($logo);
    }
    public function banner_info(Request $request)
    {
        // dd($request->all());

        $a = DB::table('banner_price_list')
                 ->leftjoin('banner_quality','banner_quality.id','=','banner_price_list.quality_id')
                ->leftjoin('banner_quantity','banner_quantity.id','=','banner_price_list.quantity_id')

                 ->where('banner_quality.id','=',$request->quality)
                ->where('banner_quantity.id','=',$request->quantity)
                ->select('banner_price_list.*','banner_quality.quality as quality1','banner_quantity.quantity as quantity1')
                ->get();
                // dd($a);
                
        $height = $request->t1;
        $width = $request->t2;
        // dd($height);


        $data = DB::table('category')
                    ->leftjoin('cate_name','cate_name.id','=','category.cate_id')
                    ->leftjoin('subcate_name','subcate_name.id','=','category.subcate_id')
                    ->select('category.*','cate_name.name as categoryname')
                     ->where('category.image','=',$request->img1)
                     
                    ->get();
                // dd($data);
        
        $logo = DB::table('logo')->get();
        return view('client_layout.categories_page.banner_info')->withlogo($logo)->witha($a)->withdata($data)->withheight($height)->withwidth($width);
    }
    public function banner_total_list(Request $request)
    {

                // dd($request->all());

        $query = DB::table('banner_price_list')
                    ->leftjoin('banner_quantity','banner_quantity.id','=','banner_price_list.quantity_id')
                    ->where('quantity_id','=',$request->s)
                    ->select('banner_price_list.*','banner_quantity.quantity as qty')
                    ->get();
                     // dd($query);
                    return $query;
    }

    // public function visitingcard()
    // {
    //     return view('client_layout.categories_page.visitingcard');
    // }
    // public function visitingcard_info()
    // {

    // }

    public function finalcart(request $request)
        {
            dd($request->all());
            $a = DB::table('billbook_price_list')
                 ->leftjoin('billbook_size','billbook_size.id','=','billbook_price_list.size_id')
                ->leftjoin('billbook_quantity','billbook_quantity.id','=','billbook_price_list.quantity_id')

                 ->where('billbook_size.id','=',$request->size)
                ->where('billbook_quantity.id','=',$request->quantity)
                ->select('billbook_price_list.*','billbook_size.size as size1','billbook_quantity.quantity as quantity1')
                ->get();
                // dd($a);
                



        $data = DB::table('category')
                    ->leftjoin('cate_name','cate_name.id','=','category.cate_id')
                    ->leftjoin('subcate_name','subcate_name.id','=','category.subcate_id')
                    ->select('category.*','cate_name.name as categoryname')
                     ->where('category.image','=',$request->image1)
                     ->where('category.b_image','=',$request->image2)
                    ->get();
                // dd($data);
        
        $logo = DB::table('logo')->get();
            return view('client_layout.finalcart')->witha($a)->withdata($data)->withlogo($logo);
        }

        public function cate_info_store(Request $request)
        {
            // dd($request->all());
            $user = Auth::user()->id;  
            // $user1 = Auth::user()->mo_no;     
            
            // dd($user);
            if($request->categoryid == '4')
            {
            
            $mainid=DB::table('bb_client_detail')
            ->insertGetid(["user_id"=>$user,"cate_name"=>$request->category,"size"=>$request->size,"quantity"=>$request->quantity,"f_image"=>$request->image1,"b_image"=>$request->image2,"title"=>$request->title,"gstno"=>$request->gstno]);
            

            $id = $request->id;
            $image = $request->image1;
            $price = $request->price;
            $category = $request->category;
            $quantity = $request->quantity;
            
            $logo = DB::table('logo')->get();
            $cart = DB::table('bb_client_detail')
                    ->where('id','=',$mainid)
                ->first();
            return view('client_layout.finalcart')->withlogo($logo)->withid($id)->withimage($image)->withprice($price)->withcategory($category)->withquantity($quantity)->withmainid($mainid);
            }


            if($request->categoryid == '1')
            {
            // dd($request->all());
            $mainid= DB::table('vc_client_detail')
            ->insertGetid(["user_id"=>$user,"f_title"=>$request->f_title,"s_title"=>$request->s_title,"cate_name"=>$request->category,"f_image"=>$request->image1,"side"=>$request->side,"b_image"=>$request->image2,"quality"=>$request->quality,"quantity"=>$request->quantity]);
            

            $id = $request->id;
            $image = $request->image1;
            $price = $request->price;
            $category = $request->category;
            $quantity = $request->quantity;
            
            $logo = DB::table('logo')->get();

            $cart = DB::table('vc_client_detail')
                    ->where('id','=',$mainid)
                ->first();
            // dd($cart);
            $sid = $cart;
            return view('client_layout.finalcart')->withlogo($logo)->withid($id)->withimage($image)->withprice($price)->withcategory($category)->withquantity($quantity)->withmainid($mainid)->withcart($cart);
            }
            if($request->categoryid == '6')
            {
            // dd($request->all());
             $mainid=DB::table('envelop_client_detail')
            ->insertGetid(["user_id"=>$user,"cate_name"=>$request->category,"f_image"=>$request->image1,"quality"=>$request->quality,"quantity"=>$request->quantity,"name"=>$request->name]);
            

            $id = $request->id;
            $image = $request->image1;
            $price = $request->price;
            $category = $request->category;
            $quantity = $request->quantity;
            
            $logo = DB::table('logo')->get();
            $cart = DB::table('envelop_client_detail')
                    ->where('id','=',$mainid)
                ->first();
            // dd($cart);
            $sid = $cart;
            
            return view('client_layout.finalcart')->withlogo($logo)->withid($id)->withimage($image)->withprice($price)->withcategory($category)->withquantity($quantity)->withmainid($mainid)->withcart($cart);
            }

            if($request->categoryid == '2')
            {
            
            // dd($request->all());
          $mainid= DB::table('banner_client_detail')
            ->insertGetid(["user_id"=>$user,"cate_name"=>$request->category,"f_image"=>$request->image1,"quality"=>$request->quality,"quantity"=>$request->quantity,"height"=>$request->height,"width"=>$request->width,"title"=>$request->title]);
             

            $id = $request->id;
            $image = $request->image1;
            $price = $request->price;
            $category = $request->category;
            $quantity = $request->quantity;
            
            $logo = DB::table('logo')->get();
            $cart = DB::table('banner_client_detail')
                    ->where('id','=',$mainid)
                ->first();
            // dd($cart);
            $sid = $cart;

            
            return view('client_layout.finalcart')->withlogo($logo)->withid($id)->withimage($image)->withprice($price)->withcategory($category)->withquantity($quantity)->withmainid($mainid)->withcart($cart);
            }
            if($request->categoryid == '7')
            {
            
            // dd($request->all());
            $mainid=DB::table('handbill_client_detail')
            ->insertGetid(["user_id"=>$user,"cate_name"=>$request->category,"f_image"=>$request->image1,"size"=>$request->size,"quantity"=>$request->quantity,"side"=>$request->side,"title"=>$request->title]);
            

            $id = $request->id;
            $image = $request->image1;
            $price = $request->price;
            $category = $request->category;
            $quantity = $request->quantity;
            
            $logo = DB::table('logo')->get();
            $cart = DB::table('handbill_client_detail')
                    ->where('id','=',$mainid)
                ->first();
            // dd($cart);
            $sid = $cart;
            
            return view('client_layout.finalcart')->withlogo($logo)->withid($id)->withimage($image)->withprice($price)->withcategory($category)->withquantity($quantity)->withmainid($mainid)->withcart($cart);
            }
           if($request->categoryid == '8')
            {
            
            // dd($request->all());
            $mainid = DB::table('laterpad_client_detail')
            ->insertGetid(["user_id"=>$user,"cate_name"=>$request->category,"f_image"=>$request->image1,"size"=>$request->size,"quantity"=>$request->quantity,"title"=>$request->title]);
            

            $id = $request->id;
            $image = $request->image1;
            $price = $request->price;
            $category = $request->category;
            $quantity = $request->quantity;
            
            $logo = DB::table('logo')->get();
            $cart = DB::table('laterpad_client_detail')
                    ->where('id','=',$mainid)
                ->first();
            // dd($cart);
            $sid = $cart;
            
            return view('client_layout.finalcart')->withlogo($logo)->withid($id)->withimage($image)->withprice($price)->withcategory($category)->withquantity($quantity)->withcart($cart)->withmainid($mainid);
            } else
            {
                echo "error";
            }
        }




}
