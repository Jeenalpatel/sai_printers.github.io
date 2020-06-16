<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class admincontroller extends Controller
{
    public function logo()
    {   
        $data = DB::table('logo')     
        ->first();

        return view('admin_layout.logo')->withData($data);
        
    }
    public function logo_insert(Request $request)
    {
        // dd($request);
        $file=$request->image->getClientOriginalName();
        $file1=time().$file;
        $loc='image_pic/';
        $path=$request->file('image')->storeas($loc,$file1);



        DB::table('logo')
        ->where('id','=',$request->id)
        ->update(["image"=>$file1]);

         return redirect()->route('logo');
        // echo "success";
    }
    public function client_review()
    {
        $data = DB::table('client_review')->get();
        return view('admin_layout.client_review')->withdata($data);

    }
    public function review_active($id ,$active)
    {
        // dd(decrypt($id),$active);

        if($active == 'active')
        {
            DB::table('client_review')
            ->where('id','=',decrypt($id))
            ->update(['active'=>'inactive','created_at'=>config('local_time:time')]);
        }
        else
        {
            DB::table('client_review')
            ->where('id','=',decrypt($id))
            ->update(['active'=>'active','created_at'=>config('local_time:time')]);   
        }
        $data= DB::table('client_review')->get();

        return redirect()->route('client_review')->withdata($data);
    }

    public function user_detail()
    {
        $user = DB::table('users')->get();
        return view('admin_layout.users')->withuser($user);
    }
    public function admin_detail()
    {
        $admin = DB::table('admins')->get();
        return view('admin_layout.admin_detail')->withadmin($admin);
    }
    public function dashboard()
    {
        $countuser = DB::table('users')->count();
        $review = DB::table('client_review')->count();
        $category = DB::table('category')->count();
        // dd($countuser);
        return view('admin_layout.dashboard')->withcountuser($countuser)->withreview($review)->withcategory($category);
    }
}
