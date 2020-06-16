<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class notificationcontroller extends Controller
{
    //
    public function show_contact_mails()
    {
    	$data = DB::table('contactus_detail')
    			->where('noti_read','=','false')
    			->get();

    	// dd($data);

    	return $data;
    }
    public function show_contact_mails_display($id)
    {
        $id=decrypt($id);

    	// dd($id);	

    	$data = DB::table('contactus_detail')
    			->where('id','=',$id)
    			->update(['noti_read'=>'true']);
    			// ->get();

    			

        return redirect()->route('admin_home')->withData($data);
        
    }

}
