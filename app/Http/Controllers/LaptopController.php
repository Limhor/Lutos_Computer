<?php

namespace App\Http\Controllers;

use App\Laptop;
use Illuminate\Http\Request;


class LaptopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function indexLaptop(){
        $laptop = Laptop::all();
        return view('homelaptop', ['laptop' => $laptop]);
    }
    public function addLaptop(Request $request){
        $this->validate($request, [
            'model' => 'required',
            'brand_name' => 'required',
            'os' => 'required',
            'price' => 'required',
            'Processor' => 'required',
            'Graphics' => 'required',
            'Display' => 'required',
            'Storage' => 'required',
            'Memory' => 'required',
            'Battery' => 'required',
            'Keyboard' => 'required',
            'Finish' => 'required',
            'dimension' => 'required',
            'Laptop_images' => 'required'
        ]);
        $laptop = new Laptop;
        $laptop -> model = $request->input('model');
        $laptop -> brand_name = $request->input('brand_name');
        $laptop -> os = $request->input('os');
        $laptop -> price = $request->input('price');
        $laptop -> Processor = $request->input('Processor');
        $laptop -> Graphics = $request->input('Graphics');
        $laptop -> Display = $request->input('Display');
        $laptop -> Storage = $request->input('Storage');
        $laptop -> Memory = $request->input('Memory');
        $laptop -> Battery = $request->input('Battery');
        $laptop -> Keyboard = $request->input('Keyboard');
        $laptop -> Finish = $request->input('Finish');
        $laptop -> dimensions = $request->input('dimension');
        if($request->hasFile('Laptop_images'))
        {
            $file = $request->file('Laptop_images');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move(public_path('/uploads/laptopimage'), $filename);
            $laptop->Laptop_images = $filename;
        }else{
            $laptop->Laptop_images = '';
        }
        $laptop->save();
        return redirect('/homelaptop')->with('info', 'Created Successfully!');
    }
    public function editLaptop($id){
        $laptop = Laptop::find($id);
        return view('updatelaptop')->with('laptop', $laptop);
    }
    public function updateLaptop(Request $request, $id){
        $this->validate($request, [
            'model' => 'required',
            'brand_name' => 'required',
            'os' => 'required',
            'price' => 'required',
            'Processor' => 'required',
            'Graphics' => 'required',
            'Display' => 'required',
            'Storage' => 'required',
            'Memory' => 'required',
            'Battery' => 'required',
            'Keyboard' => 'required',
            'Finish' => 'required',
            'dimension' => 'required',
        ]);
        $data = array(
            'model' => $request->input('model'),
            'brand_name' =>  $request->input('brand_name'),
            'os' => $request->input('os'),
            'price' => $request->input('price'),
            'Processor' => $request->input('Processor'),
            'Graphics' => $request->input('Graphics'),
            'Display' => $request->input('Display'),
            'Storage' => $request->input('Storage'),
            'Memory' => $request->input('Memory'),
            'Battery' => $request->input('Battery'),
            'Keyboard' => $request->input('Keyboard'),
            'Finish' => $request->input('Finish'),
            'dimensions' => $request->input('dimension')
        );
        Laptop::where('id', $id)->update($data);
        return redirect('/homelaptop')->with('info', 'Updated Successfully!');
    }
    public function show($id){
        $laptop = Laptop::find($id);
        return view('showlaptop')->with('laptop', $laptop);
    }
    public function deleteLaptop($id){
        Laptop::where('id', $id)->delete();
        return redirect('/homelaptop')->with('info', 'Deleted Successfully!');
    }
}
