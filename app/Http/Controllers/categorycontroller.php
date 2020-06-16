<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\View;
use DB;

class categorycontroller extends Controller
{
    // public function service()
    // {
    // 	return view('client_layout.category');

    // }


    public function cate_name()
    {
        $data = DB::table('cate_name')->get();
        return view('admin_layout.cate_name')->withData($data);
    }
    public function cate_name_insert(request $request)
    {
        DB::table('cate_name')
            ->insert(["name"=>$request->name,"created_at"=>config('local_time:time')]);
        return redirect()->route('cate_name');
        
    }

    public function subcate_name()
    {
        $data = DB::table('subcate_name')->get();

        $cate= DB::table('cate_name')->get();
        return view('admin_layout.sub_cate_name')->withCate($data)->withCate($cate);



    }
    public function subcate_name_insert(request $request)
    {
        // dd($request);

        DB::table('subcate_name')
            ->insert(["cate_id"=>$request->cate_id,"sub_name"=>$request->name,"created_at"=>config('local_time:time')]);
        return redirect()->route('subcate_name');
        
    }
    

    public function category_insert(Request $request)
    {
        // dd($request);
        if($request->b_image)
        {
        $file=$request->image->getClientOriginalName();
        $file1=time().$file;
        $loc='category/';
        $path=$request->file('image')->storeAs($loc,$file1);

        $file=$request->b_image->getClientOriginalName();
        $file2=time().$file;
        $loc='category/';
        $path=$request->file('b_image')->storeAs($loc,$file2);

        

        DB::table('category')
            ->insert(["cate_id"=>$request->cate_id,"subcate_id"=>$request->subcate_id,"image"=>$file1,"b_image"=>$file2,"price"=>$request->price,"active"=>$request->active,"created_at"=>config('local_time:time')]);
            
        return redirect()->route('category');
        }
        else
        {
                $file=$request->image->getClientOriginalName();
        $file1=time().$file;
        $loc='category/';
        $path=$request->file('image')->storeAs($loc,$file1);

                DB::table('category')
            ->insert(["cate_id"=>$request->cate_id,"subcate_id"=>$request->subcate_id,"image"=>$file1,"price"=>$request->price,"active"=>$request->active,"created_at"=>config('local_time:time')]);
            
        return redirect()->route('category');

        }
    }
    public function category()
    {
        
        $data = DB::table('category')
                    ->leftjoin('cate_name','cate_name.id','=','category.cate_id')
                    ->leftjoin('subcate_name','subcate_name.id','=','category.subcate_id')
                    ->select('category.*','cate_name.id as categoryid','cate_name.name as categoryname','subcate_name.sub_name as subcategoryname')
                    ->get();


        // dd($data);
        $cate= DB::table('cate_name')->get();
        $subcate=DB::table('subcate_name')->get();


        return view('admin_layout.categoryin')->withData($data)->withcate($cate)->withsubcate($subcate);
    }

    public function subcate_list(request $request)
    {
        $query = DB::table('subcate_name')
                    ->where('cate_id','=',$request->a)
                    ->select('subcate_name.sub_name','subcate_name.id')
                    ->get();

                    return $query;
    }
    



    public function cate_vise_data($id)
    {
         // dd($id);
        return view('client_layout.about');
    }


    public function editcategory($id)
    {
        $data=  DB::table('category')
        ->where('id','=',$id)
        ->get();

        $oldcategory = DB::table('category')
                    ->leftjoin('cate_name','cate_name.id','=','category.cate_id')
                    ->leftjoin('subcate_name','subcate_name.id','=','category.subcate_id')
                    ->select('category.*','cate_name.id as categoryid','cate_name.name as categoryname','subcate_name.sub_name as subcategoryname')
                    ->get();
        // dd($oldcategory);
        return view('admin_layout.editcategory')->withdata($data)->witholdcategory($oldcategory);
        
    }
     public function updatcategory(request $request)
     {
         $file=$request->image->getClientOriginalName();
         $file1=time().$file;
         $loc='category/';
         $path=$request->file('image')->storeas($loc,$file1);

        $file=$request->b_image->getClientOriginalName();
        $file2=time().$file;
        $loc='category/';
        $path=$request->file('b_image')->storeAs($loc,$file2);

        


        DB::table('category')
         ->where('id','=',$request->id)
         ->update(["cate_id"=>$request->cate_id,"subcate_id"=>$request->subcate_id,"image"=>$file1,"b_image"=>$file2,"price"=>$request->price,"active"=>$request->active,"created_at"=>config('local_time:time')]);
         
            return redirect()->route('category');


     }

     public function deletecategory($id)
     {
            DB::table('category')     
       ->where('id','=',decrypt($id))
       ->delete();
       return redirect()->route('category');
     }
     public function par_category($id)
     {
        // dd($id);
        $logo = DB::table('logo')->get();
        $bimage = DB::table('b_image')->first();
        $cate= DB::table('cate_name')->get();
        $subcate= db::table('subcate_name')->get();

        
        $category= DB::table('category')
                    ->where('cate_id','=',$id)
                    ->leftjoin('cate_name','cate_name.id','=','category.cate_id')
                    ->select('category.*','cate_name.id as categoryid','cate_name.name as categoryname')
                    ->paginate(3);
        return view('client_layout.category')->withcategory($category)->withLogo($logo)->withbimage($bimage)->withcate($cate)->withsubcate($subcate);
                    


     }


}
