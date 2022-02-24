<?php

namespace App\Http\Controllers;
use App\Models\faculty;

use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    public function index(){
        $data = faculty::all();
        return view('component.index',compact('data'));
    }
}
