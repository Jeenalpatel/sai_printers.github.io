<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class banner_imagecontroller extends Controller
{
    // 
    public function b_image()
    {
 		$data = DB::table('b_image')->first();
    	return view('admin_layout.banner_image')->withdata($data);
    }

    public function b_image_insert(Request $request)
    {
        if($request->a_image)
        {
        $file=$request->a_image->getClientOriginalName();
        $file1=time().$file;
        $loc='b_image/';
        $path=$request->file('a_image')->storeAs($loc,$file1);

        	DB::table('b_image')
        	->where('id','=',$request->id)
        	->update(["a_image"=>$file1,"created_at"=>config('local_time:time')]);
        
        	return redirect()->route('b_image');

    	}
    	elseif($request->s_image)
    	{
        $file=$request->s_image->getClientOriginalName();
        $file2=time().$file;
        $loc='b_image/';
        $path=$request->file('s_image')->storeAs($loc,$file2);
		
			DB::table('b_image')
        	->where('id','=',$request->id)
        	->update(["s_image"=>$file2,"created_at"=>config('local_time:time')]);
        
        	return redirect()->route('b_image');        
    	}
    	elseif ($request->w_image) 
    	{
        $file=$request->w_image->getClientOriginalName();
        $file3=time().$file;
        $loc='b_image/';
        $path=$request->file('w_image')->storeAs($loc,$file3);

        DB::table('b_image')
        	->where('id','=',$request->id)
        	->update(["w_image"=>$file3,"created_at"=>config('local_time:time')]);
        
        	return redirect()->route('b_image');        
    	}
    	elseif($request->c_image)
    	{
        $file=$request->c_image->getClientOriginalName();
        $file4=time().$file;
        $loc='b_image/';
        $path=$request->file('c_image')->storeAs($loc,$file4);
        DB::table('b_image')
        	->where('id','=',$request->id)
        	->update(["c_image"=>$file4,"created_at"=>config('local_time:time')]);
        
        	return redirect()->route('b_image');        
    	}
        else
        {
        	return redirect()->route('b_image');        	
        }

    }
}
