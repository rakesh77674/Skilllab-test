<?php

namespace App\Http\Controllers;
use App\Models\Faculty;
use App\Models\Module;


use Illuminate\Http\Request;

class Indexcontroller extends Controller
{
    public function index(){
        $data = Faculty::all();
        return view('component.index',compact('data'));
    }
    public function getmodule(Request $request){
        $cid=$request->post('cid');
		 $module=Module::where('faculties_id',$cid)->get();
		 $html='<option value="">Select Module</option>';
		 foreach($module as $list){
		 $html.='<option value="'.$list->id.'">'.$list->module.'</option>';
		 }
		return $html;

    }
}
