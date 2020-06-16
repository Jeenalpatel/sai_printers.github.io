<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class aboutcontroller extends Controller
{
    //
    public function about_content()
    {
        $data = DB::table('about_content')->first();

    	return view('admin_layout.content_insert')->withdata($data);
    }
    public function content_insert(Request $request)
    {
    	$file=$request->image->getClientOriginalName();
        $file1=time().$file;
        $loc='content_image/';
        $path=$request->file('image')->storeAs($loc,$file1);

        DB::table('about_content')
        ->where('id','=',$request->id)
        ->update(["image"=>$file1,"content"=>$request->content,"created_at"=>config('local_time:time')]);
        return redirect()->route('about_content');




        // DB::table('about_content')
        //     ->insert(["image"=>$file1, "content"=>$request->content,"created_at"=>config('local_time:time')]);
        // return redirect()->route('about_content');
        

        
    }
    public function tryabout()
    {
        $logo = DB::table('logo')->get();
        $bimage = DB::table('b_image')->first();
        $acontent = DB::table('about_content')->first();
        
        return view('try_layout.tryabout')->withlogo($logo)->withbimage($bimage)->withacontent($acontent);
            
    }
    public function review_form(Request $request)
    {
        // dd($request->all());
        $file=$request->image->getClientOriginalName();
        $file1=time().$file;
        $loc='review_image/';
        $path=$request->file('image')->storeAs($loc,$file1);

        DB::table('client_review')
        ->insert(["image"=>$file1,"name"=>$request->name,"review"=>$request->review,"created_at"=>config('local_time:time')]);
        return redirect()->route('c_layout');
   
    }
}
