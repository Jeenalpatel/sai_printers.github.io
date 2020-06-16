<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class bannercontroller extends Controller
{
    public function banner()
    {
        $data = DB::table('banner')     
        ->get();
 
        return view('admin_layout.banner')->withData($data);
    }

    public function banner_insert(Request $request)
    {
        // dd($request);
        $file=$request->image->getClientOriginalName();
        $file1=time().$file;
        $loc='banner/';
        $path=$request->file('image')->storeas($loc,$file1);

        DB::table('banner')->insert(["image"=>$file1,"active"=>$request->active,"created_at"=>config('local_time:time'),"title"=>$request->title,"info"=>$request->info]);
        return redirect()->route('banner');

    }


    public function banner_active($id,$active)
    {
        // dd(decrypt($id),$active);

        if($active == 'active')
        {
            DB::table('banner')
            ->where('id','=',decrypt($id))
            ->update(['active'=>'inactive','created_at'=>config('local_time:time')]);
        }
        else
        {
            DB::table('banner')
            ->where('id','=',decrypt($id))
            ->update(['active'=>'active','created_at'=>config('local_time:time')]);   
        }
        $data= DB::table('banner')->get();

        return redirect()->route('banner')->withdata($data);
    }

    public function editbanner($id)
    {
        $data=  DB::table('banner')
        ->where('id','=',$id)
        ->get();

        return view('admin_layout.editbanner')->withdata($data);


    }
    public function updatebanner(request $request)
    {
        $file=$request->image->getClientOriginalName();
         $file1=time().$file;
         $loc='banner/';
         $path=$request->file('image')->storeas($loc,$file1);

        DB::table('banner')
         ->where('id','=',$request->id)
         ->update(["image"=>$file1,"title"=>$request->title,"info"=>$request->info,"created_at"=>config('local_time:time')]);
         
         
            return redirect()->route('banner');


    }
    public function deletebanner($id)
    {
        DB::table('banner')     
       ->where('id','=',decrypt($id))
       ->delete();
       return redirect()->route('banner');

    }

}
