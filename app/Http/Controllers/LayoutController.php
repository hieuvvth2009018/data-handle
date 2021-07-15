<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layoutController extends Controller
{
    public function create(){
        return view('user/form');
    }
    public function list(){
        return view('user/list');
    }
    public function masterLayout(){
        return view('layout/masterLayout');
    }
}
