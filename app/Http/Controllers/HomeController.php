<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        // $cartCollection = \Cart::getContent();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function main_layout()
    {
        $logo = DB::table('logo')->get();
        $banner = DB::table('banner')
        ->where('active','=','active')
        ->get();
        $works= DB::table('works')->get();
        
        return view('client_layout.main_layout')->withLogo($logo)->withBanner($banner)->withworks($works);
    }
    public function main_page()
    {
        $logo = DB::table('logo')->get();
        $banner = DB::table('banner')
        ->where('active','=','active')
        ->get();
        $works= DB::table('works')->get();
        
        
        return view('client_layout.main_page')->withlogo($logo)->withBanner($banner)->withworks($works)->withcartCollection($cartCollection);
    }

    // client side home page
    public function c_layout()
    {
        $logo = DB::table('logo')->get();
        $banner = DB::table('banner')
        ->where('active','=','active')
        ->get();
        $works= DB::table('works')->paginate(6);
        $bimage = DB::table('b_image')->get();
        $acontent = DB::table('about_content')->first();
        $cartCollection = \Cart::getContent();
        
        

        
        return view('client_layout.index')->withLogo($logo)->withBanner($banner)->withworks($works)->withbimage($bimage)->withacontent($acontent)->withcartCollection($cartCollection);

        
    }

    // client side category page

    public function category_display()
    {
        $logo = DB::table('logo')->get();

        // $category = DB::table('cate_name')->get();

        // $subcategory = DB::table('subcate_name')->get();
        // ->withcategory($category)->withsubcategory($subcategory)

        // dd($category,$subcategory);

        return view('client_layout.category_main_display')->withLogo($logo);
    }
    public function cate_layout()
    {
        $logo = DB::table('logo')->get();
        $category= DB::table('category')
                    ->leftjoin('cate_name','cate_name.id','=','category.cate_id')
                    ->select('category.*','cate_name.id as categoryid','cate_name.name as categoryname')
                    ->paginate(6);
        $bimage = DB::table('b_image')->first();
                    // dd($category);
        $cate= DB::table('cate_name')->get();
        $subcate= db::table('subcate_name')->get();
        


        
        return view('client_layout.category')->withcategory($category)->withlogo($logo)->withbimage($bimage)->withcate($cate)->withsubcate($subcate);
    }

    public function fetch_data(Request $request)
    {
        if($request->ajax())
        {
                $logo = DB::table('logo')->get();
        $bimage = DB::table('b_image')->first();
        $category= DB::table('category')
                    ->leftjoin('cate_name','cate_name.id','=','category.cate_id')
                    ->select('category.*','cate_name.id as categoryid','cate_name.name as categoryname')
                    ->paginate(6);

                    // dd($category);

        $cate= DB::table('cate_name')->get();
        $subcate= db::table('subcate_name')->get();

        return view('client_layout.category')->withLogo($logo)->withcategory($category)->withbimage($bimage)->withcate($cate)->withsubcate($subcate)->render();       
        }
    }
    public function a_layout()
    {
        return view('admin_layout.admin');
    }

    public function portfolio_layout()
    {
        $logo = DB::table('logo')->get();
        $bimage = DB::table('b_image')->first();
        $portfolio = DB::table('portfolio')
                    ->leftjoin('cate_name','cate_name.id','=','portfolio.cate_id')
                    // ->leftjoin('subcate_name','subcate_name.id','=','category.subcate_id')
                    ->select('cate_name.id as categoryid','cate_name.name as c_name','portfolio.*')
                     ->paginate(6);
        $cartCollection = \Cart::getContent();




        return view('client_layout.portfolio')->withLogo($logo)->withbimage($bimage)->withportfolio($portfolio)->withcartCollection($cartCollection);
    }

    
    public function about()
    {
        $logo = DB::table('logo')->get();
        $bimage = DB::table('b_image')->first();
        $acontent = DB::table('about_content')->first();
        $review = DB::table('client_review')
        ->where('active','=','active')
        ->get();
        
        return view('client_layout.about')->withlogo($logo)->withbimage($bimage)->withacontent($acontent)->withreview($review);
    }
    public function contact()
    {
        $logo = DB::table('logo')->get();
        $bimage = DB::table('b_image')->first();
        $cartCollection = \Cart::getContent();
        
        return view('client_layout.contact')->withlogo($logo)->withbimage($bimage)->withcartCollection($cartCollection);
    }
    public function header2()
    {
        // return view('client_layout.main_layout');

        $logo = DB::table('logo')->get();
        $banner = DB::table('banner')
        ->where('active','=','active')
        ->get();
        $works= DB::table('works')->get();
        
        return view('client_layout.main_layout')->withLogo($logo)->withBanner($banner)->withworks($works);
    }

    public function main_category()
    {
        $logo = DB::table('logo')->get();

        $banner = DB::table('banner')
        ->where('active','=','active')
        ->get();
        $works= DB::table('works')->get();
        $bimage = DB::table('b_image')->first();
        $category= DB::table('category')
                    ->leftjoin('cate_name','cate_name.id','=','category.cate_id')
                    ->select('category.*','cate_name.id as categoryid','cate_name.name as categoryname')
                    ->paginate(6);

                    // dd($category);

        $cate= DB::table('cate_name')->get();
        $subcate= db::table('subcate_name')->get();


        
        return view('client_layout.main_category')->withlogo($logo)->withBanner($banner)->withworks($works)->withbimage($bimage)->withcategory($category)->withcate($cate)->withsubcate($subcate);
    }


    public function d_category_layout()
    {
        $logo = DB::table('logo')->get();
        $banner = DB::table('banner')
        ->where('active','=','active')
        ->get();
        $works= DB::table('works')->get();
        $bimage = DB::table('b_image')->first();
        $category= DB::table('category')
                    ->leftjoin('cate_name','cate_name.id','=','category.cate_id')
                    ->select('category.*','cate_name.id as categoryid','cate_name.name as categoryname')
                    ->get();

                    // dd($category);

        $cate= DB::table('cate_name')->get();
        $subcate= db::table('subcate_name')->get();


        
        return view('client_layout.category_layout')->withLogo($logo)->withBanner($banner)->withworks($works)->withbimage($bimage)->withcategory($category)->withcate($cate)->withsubcate($subcate);
    }
    

    public function all()
    {
            $data = DB::table('cate_name')
                    ->leftjoin('subcate_name','subcate_name.cate_id','=','cate_name.id')
                    ->select('cate_name.id','cate_name.name as cname','subcate_name.id as sid','subcate_name.sub_name as subcat','subcate_name.cate_id as cate_id')
                    ->get();

            $test = array();
            $chk = 'test';
            $a1 = array();
            $a2 = array();

                    // dd($data,$test,$chk);

            foreach ($data as $a) {
                        if($a->id == $chk)
                        {
                            // dd($a);

                            $a2[] = ['sid'=>$a->sid,'sname'=>$a->subcat,'cate_id'=>$a->cate_id];

                            // dd($data,$chk,$a2,count($a2));
                        }
                        else
                        {
                            if(count($a2))
                            {
                                    $a1['sub']=$a2;
                                    $test[] = $a1;
                                    $a2 = array();
                                    $a1 = array();

                                    // dd($a2,$test);
                            }
                            
                            $a1=['id'=>$a->id,'cname'=>$a->cname];
                            $a2=['sid'=>$a->sid,'sname'=>$a->subcat,'cate_id'=>$a->cate_id];
                            $chk=$a->id;

                            // dd($a1,$a2,$chk);
                        }
                       }   
                       // dd($test);        
                        // dd($data,$a1,$a2);
                       // dd($test);
                        return $test;
    }



    public function j_layout()
    {
        return view('client_layout.jumka_main_layout');
    }

    public function contactus_save(Request $request)
    {
        // dd($request->all()); 

        $validation = $request->validate([
            'f_name'=>'required',
            'phone_no' => 'required|numeric|min:11',
            'msg' =>'required',

        ]);
        $mainid =   DB::table('contactus_detail')
            ->insertGetid(["f_name"=>$request->f_name,"email"=>$request->email,"phone_no"=>$request->phone_no,"msg"=>$request->msg]);

        $data = DB::table('contactus_detail')
                    ->where('id','=',$mainid)
                    ->first();

                    // dd($data);

        $adminemail = "saiprinters1020@gmail.com";
        Mail::send('mail.u_mail',['data'=>$data], function ($message) use($adminemail)
        {
            $message->to($adminemail)->subject('have a query');
        });
        
         Mail::send('mail.c_mail',['data'=>$data], function ($message) use($data)
      {
          $message->from('saiprinters1020@gmail.com','saiprinters1020');
          $message->to($data->email)->subject('THANK YOU');
      });
        
        // Mail::send('mail.u_mail',['data'=>$data], function ($message) use($data)
        //   {
        //       $message->from($data->email);
        //       $message->to('saiprinters1020@gmail.com','saiprinters1020')->subject('have a query');
        //   });

    

        return redirect()->back()->with('success_msg','THANK YOU FOR CONTACT US WE WILL GET BACK SOON.');
    }

}

