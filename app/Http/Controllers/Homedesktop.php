<?php

namespace App\Http\Controllers;

use App\Desktop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Homedesktop extends Controller

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
        $desktops = DB::table('desktops')->get();

        return view('Frontend.desktop', ['desktops' => $desktops]);
    }
    public function show($id){
        $desktop = Desktop::find($id);
        return view('/Frontend/singledesktop')->with('desktop', $desktop);
    }
}
