<?php

namespace App\Http\Controllers;

use App\Desktop;
use Illuminate\Http\Request;

class DesktopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $desktop = Desktop::all();
        return view('homedesktop', ['desktop' => $desktop]);
    }
    public function add(Request $request){
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
            'Desktop_images' => 'required'
        ]);
        $desktop = new Desktop;
        $desktop -> model = $request->input('model');
        $desktop -> brand_name = $request->input('brand_name');
        $desktop -> os = $request->input('os');
        $desktop -> price = $request->input('price');
        $desktop -> Processor = $request->input('Processor');
        $desktop -> Graphics = $request->input('Graphics');
        $desktop -> Display = $request->input('Display');
        $desktop -> Storage = $request->input('Storage');
        $desktop -> Memory = $request->input('Memory');
        $desktop -> Battery = $request->input('Battery');
        $desktop -> Keyboard = $request->input('Keyboard');
        $desktop -> Finish = $request->input('Finish');
        $desktop -> dimensions = $request->input('dimension');
        if($request->hasFile('Desktop_images'))
        {
            $file = $request->file('Desktop_images');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move(public_path('/uploads/desktopimage'), $filename);
            $desktop->Desktop_images = $filename;
        }else{
            $desktop->Desktop_images = '';
        }
        $desktop->save();
        return redirect('/homedesktop')->with('info', 'Created Successfully!');
    }
    public function edit($id){
    $desktop = Desktop::find($id);
    return view('updatedesktop')->with('desktop', $desktop);
}
    public function update(Request $request, $id){
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
        Desktop::where('id', $id)->update($data);
        return redirect('/homedesktop')->with('info', 'Updated Successfully!');
    }
    public function show($id){
        $desktop = Desktop::find($id);
        return view('showdesktop')->with('desktop', $desktop);
    }
    public function delete($id){
        Desktop::where('id', $id)->delete();
        return redirect('/homedesktop')->with('info', 'Deleted Successfully!');
    }
}
