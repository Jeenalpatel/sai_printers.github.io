<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class portfoliocontroller extends Controller
{
    public function portfolio_start()
	{
            $data = DB::table('portfolio')
                ->leftjoin('cate_name','cate_name.id','=','portfolio.cate_id')
                    ->leftjoin('subcate_name','subcate_name.id','=','portfolio.subcate_id')
                    ->select('portfolio.*','cate_name.id as cateid','cate_name.name as c_name','subcate_name.sub_name as subcategoryname')
                     ->get();
        
                    
			$cate= DB::table('cate_name')->get();
        $subcate=DB::table('subcate_name')->get();

    	return view('admin_layout.portfolio')->withdata($data)->withcate($cate)->withsubcate($subcate);
    }
    public function portfolio_insert(Request $request)
    {
    	
        // dd($request);
        $file=$request->image->getClientOriginalName();
        $file1=time().$file;
        $loc='portfolio/';
        $path=$request->file('image')->storeAs($loc,$file1);

        

        DB::table('portfolio')
            ->insert(["cate_id"=>$request->cate_id,"subcate_id"=>$request->subcate_id,"image"=>$file1,"price"=>$request->price,"active"=>$request->active,"created_at"=>config('local_time:time')]);
            
        return redirect()->route('portfolio_start');

	
    }

    public function portfolio()
    {
        
        
        $data = DB::table('portfolio')
                     ->leftjoin('cate_name','cate_name.id','=','category.cate_id')
                     ->leftjoin('subcate_name','subcate_name.id','=','category.subcate_id')
                    ->select('category.*','cate_name.id as categoryid','cate_name.name as c_name','subcate_name.sub_name as subcategoryname')
                     ->get();


        // dd($data);
        $cate= DB::table('cate_name')->get();
        $subcate=DB::table('subcate_name')->get();


        return view('client_layout.portfolio')->withdata($data)->withcate($cate)->withsubcate($subcate);
    }

        
    public function subcate_list(request $request)
    {
        $query = DB::table('subcate_name')
                    ->where('cate_id','=',$request->a)
                    ->select('subcate_name.sub_name','subcate_name.id')
                    ->get();

                    return $query;
    }
}
