<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class workcontroller extends Controller
{ 
    //
    public function works()
    {
        $data = DB::table('works')->get();

        return view('admin_layout.works')->withData($data);
    }

    public function works_insert(Request $request)
    {
        // dd($request);
        $file=$request->image->getClientOriginalName();
        $file1=time().$file;
        $loc='works/';
        $path=$request->file('image')->storeAs($loc,$file1);

        

        DB::table('works')
            ->insert(["image"=>$file1,"title"=>$request->title,"active"=>$request->active,"created_at"=>config('local_time:time')]);
            
        return redirect()->route('works');

    }

    public function works_active($id,$active)
    {
        // dd(decrypt($id),$active);

        if($active == 'active')
        {
            DB::table('works')
            ->where('id','=',decrypt($id))
            ->update(['active'=>'inactive','created_at'=>config('local_time:time')]);
        }
        else
        {
            DB::table('works')
            ->where('id','=',decrypt($id))
            ->update(['active'=>'active','created_at'=>config('local_time:time')]);   
        }
        $data= DB::table('works')->get();

        return redirect()->route('works')->withdata($data);
    }


    

}
