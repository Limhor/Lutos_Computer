<?php

namespace App\Http\Controllers;

use App\Accessory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeAccessory extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function home()
    {
        $accs = DB::table('accessories')->get();

        return view('Frontend.accesory', ['accessories' => $accs]);
    }
    public function show($id){
        $articles = Accessory::find($id);
        return view('/Frontend/singleAcc', ['accessory' => $articles]);
    }
}
