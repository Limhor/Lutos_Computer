<?php

namespace App\Http\Controllers;

use App\Accessory;
use Illuminate\Http\Request;

class AccessoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $articles = Accessory::all();
        return view('home', ['articles' => $articles]);
    }
    public function add(Request $request){
        $this->validate($request, [
            'brand_name' => 'required',
            'price' => 'required',
            'type' => 'required',
            'model' => 'required',
            'image' => 'required'
        ]);
        $articles = new Accessory;
        $articles->brand_name = $request->input('brand_name');
        $articles->price = $request->input('price');
        $articles->type = $request->input('type');
        $articles->model = $request->input('model');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move(public_path('/uploads/accessoryimage'), $filename);
            $articles->image = $filename;
        }else{
            $articles->image = '';
        }
        $articles->save();
        return redirect('/home')->with('info', 'Created Successfully!');
    }
    public function update($id){
        $articles = Accessory::find($id);
        return view('update', ['articles' => $articles]);
    }
    public function edit(Request $request, $id){
        $this->validate($request, [
            'brand_name' => 'required',
            'price' => 'required',
            'type' => 'required',
            'model' => 'required'
        ]);
        $data = array(
            'brand_name' => $request->input('brand_name'),
            'price' => $request->input('price'),
            'type' => $request->input('type'),
            'model' => $request->input('model')
        );
        Accessory::where('id', $id)->update($data);
        return redirect('/home')->with('info', 'Updated Successfully!');
    }
    public function show($id){
        $articles = Accessory::find($id);
        return view('show', ['articles' => $articles]);
    }
    public function delete($id){
        Accessory::where('id', $id)->delete();
        return redirect('/home')->with('info', 'Deleted Successfully!');
    }
}
