<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;


class Admin_logincontroller extends Controller
{
    
    public function __construct()
    {
        $this->middleware('admin_auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index1()
    {
        return view('admin_layout.admin');
    }
}
