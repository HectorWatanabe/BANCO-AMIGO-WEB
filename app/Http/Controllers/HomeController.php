<?php

namespace App\Http\Controllers;

use App\User;
use App\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nusers = User::Where('role', 'client')->count();

        //dd($nusers);

        $role = Auth::user()->role;

        if($role != 'admin'){
            return view('client.home');
        }else{
            $count_c = Account::count_bank_c();
            $count_f = Account::count_bank_f();
            $count_off = Account::count_off();
            
            return view('admin.home', ['nusers' => $nusers, 'count_c' => $count_c, 'count_f' => $count_f, 'count_off' => $count_off]);    
        }
    }
}
