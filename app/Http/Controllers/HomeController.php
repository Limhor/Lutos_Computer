<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laptop;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
        $laptops = DB::table('laptops')->get();

        return view('Frontend.laptop', ['laptops' => $laptops]);
    }
    public function show($id){
        $laptop = Laptop::find($id);
        return view('/Frontend/singlelaptop')->with('laptop', $laptop);
    }
}
