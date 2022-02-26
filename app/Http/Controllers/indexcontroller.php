<?php

namespace App\Http\Controllers;
use App\Models\Faculty;
use App\Models\Module;
use App\Models\Form;

use Illuminate\Http\Request;

class Indexcontroller extends Controller
{
    public function index(){
        $data = Faculty::all();//select all the faculty from the model 
        return view('component.index',compact('data'));
    }
    public function getmodule(Request $request){
        $cid=$request->post('cid');
		 $module=Module::where('faculties_id',$cid)->get();
		 $html='<option value="">Select Module</option>';
		 foreach($module as $list){
		 $html.='<option value="'.$list->id.'">'.$list->module.'</option>';//display the list of each modules through the id
		 }
		return $html;
    }
    public function addmodule(Request $request){
        request()->validate([
            'LectureName'=> 'required',
            'Gender'=>'required',
            'phone'=> 'required',
            'email'=>'required',
            'Address'=>'required',
            'Nationality'=>'required',
            'DOB'=>'required',
            'faculties_id'=>'required',
            'modules_id'=>'required',

        ]);
         Form::create($request->all());
        return redirect("/");
    }

}
